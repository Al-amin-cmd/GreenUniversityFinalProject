{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>


        <!-- Present Address -->
        <div class="mt-4">
            <x-input-label for="present_address" :value="__('Present Address')" />
            <x-text-input id="present_address" class="block mt-1 w-full" type="present_address" name="present_address"
                :value="old('present_address')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('present_address')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('ui_login/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('ui_login/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('ui_login/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('ui_login/css/registerCss.css') }}">
    <title>Register Foram</title>
</head>

<body>

    <div class="container">
        <div class="myCard">
            <div class="row">
                <div class="col-md-6">
                    <div class="myLeftctn">
                        <form method="POST" action="{{ route('register') }}" class="myForm text-center">
                            @csrf
                            <header>Create new account</header>

                            <div class="form-group">
                                <li class="fas fa-user"></li>
                                <input class="myInput" type="text" placeholder="Full name" name="name"
                                    :value="old('name')" required autofocus autocomplete="name">
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>

                            <div class="form-group">
                                <li class="fas fa-envelope"></li>
                                <input class="myInput" type="email" placeholder="Email" id="email" name="email"
                                    :value="old('email')" required autocomplete="username">

                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <div class="form-group">
                                <li class="fas fa-envelope"></li>
                                <input class="myInput" type="text" placeholder="address" id="address"
                                    name="present_address" :value="old('present_address')" required
                                    autocomplete="username" />
                                <x-input-error :messages="$errors->get('present_address')" class="mt-2" />
                            </div>

                            <div class="form-group">
                                <li class="fas fa-lock"></li>
                                <input class="myInput" type="password" placeholder="Password" id="password"
                                    name="password" required autocomplete="new-password" />

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <div class="form-group">
                                <li class="fas fa-lock"></li>
                                <input class="myInput" type="password" placeholder="Confiram Password" id="password"
                                    name="password_confirmation" required autocomplete="new-password" />

                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>

                            <div class="form-group">
                                <label for="">
                                    <a href="{{ route('login') }}">
                                        {{ __('Already registered?') }}</a>
                                </label>
                            </div>
                            <button class="btn" style="color:white; background-color: #c33cf9e0">
                                {{ __('Register') }}</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="myRightCtn">
                        <div class="box">
                            <h5>Hello Welcome to <br> Refugee Management System</h5>
                            <p style="text-align: justify;
                            ">It's important to create a
                                supportive and inclusive environment for refugees Here are some steps you can take to
                                facilitate a welcoming atmosphere:<br>
                                2. Collaboration: Engage with refugee support organizations, NGOs, and local community
                                groups working with refugees. Collaborate with them to better understand the needs and
                                challenges of refugees and to coordinate efforts effectively. <br>
                                3. Housing Assistance: Work with local housing authorities and community organizations
                                to provide affordable and suitable housing options for refugees. ensure refugees have
                                access to basic amenities.<br>
                                4. Health and Medical Services: Collaborate with healthcare providers to ensure refugees
                                have access to essential medical services, including physical and mental health support.


                            </p>
                            {{-- <input type="button" name="button" class="button_out" value="Learn More"> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('ui_login/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
