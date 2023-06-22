<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function index(){
        return view('../admin/userProfile/profile');
    }

    public function updateUserDetails(Request $request){
        $user = User::findOrFail(Auth::user()->id);

        $user->update([
            'name' => $request->username
        ]);

        $user->UserDetail()->updateOrCreate(

            [
                'user_id' => $user
            ],
            [
                'image' =>$request->image,
                'address' =>$request->address,
                'location' =>$request->location,
                'mobile_no' =>$request->mobile_no,
                'dob' =>$request->dob,
            ]
        );

        return redirect()->back()->with('message', 'user profile updated');
    }
}