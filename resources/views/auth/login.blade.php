{{-- <x-guest-layout>
    <!-- Session Status -->
<x-auth-session-status class="mb-4" :status="session('status')" /> --}}

{{-- <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                    name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form> --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('ui_login/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('ui_login/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('ui_login/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('ui_login/css/style.css') }}">
    <title>login</title>
</head>

<body>

    <div class="container">
        <div class="myCard">
            <div class="row">
                <div class="col-md-12">
                    <div class="myLeftctn">
                        <form method="POST" action="{{ route('login') }}" class="myForm text-center">
                            @csrf
                            <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" fill="currentColor"
                                class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path fill-rule="evenodd"
                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                            </svg>
                            <div class="form-group">
                                <li class="fas fa-user"></li>
                                <input class="myInput" type="text" name="email" :value="old('email')" required
                                    autofocus autocomplete="username" placeholder="Username or email" id="username">
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <div class="form-group">
                                <li class="fas fa-lock"></li>
                                <input class="myInput" type="password" placeholder="Password" id="password"
                                    name="password" required autocomplete="current-password">
                                <x-input-error :messages="$errors->get('password')" class="mt-2 txt-danger" />
                            </div>

                            {{-- <div class="form-group">
                                <label for="">
                                    <input id="check_1" name="remember" type="checkbox">
                                    <small>
                                        already have an account?
                                    </small>
                                </label>
                            </div> --}}

                            {{-- <div class="flex items-center justify-end mt-4">
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                        href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif


                            </div> --}}

                            <div id="form-group">
                                <button class="ml-3 btn" style="background-color: #b81df5c1; color:white">
                                    {{ __('Log in') }}
                                </button>
                            </div>
                        </form>

                        <div id="form-group">
                            <a href="{{ route('register') }}">
                                Create New Account

                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('ui_login/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>

{{-- </x-guest-layout> --}}
