<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use App\Models\User;
use App\Models\UserDetail;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Database\QueryException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
//use Symfony\Component\HttpKernel\Profiler\Profile;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        try{

            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]);

            DB::beginTransaction();

            $user = User::create([
                'name' => $request->name,
                'role_id' =>1,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            $profileData = [
                'user_id' =>$user->id,
                'present_address' => $request->present_address
            ];

            // UserDetail::create($profileData);
            // $user->userDetails()->create([
            //     'present_address' => $request->present_address
            // ]);

            DB::commit();

            event(new Registered($user));

            Auth::login($user);

            return redirect(RouteServiceProvider::HOME);
        }catch(QueryException $e){
            DB::rollBack();
        }

    }
}