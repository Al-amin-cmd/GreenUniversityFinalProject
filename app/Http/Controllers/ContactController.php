<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        return view('../frontend/contact');
    }

    public function create(){

        return view('../frontend/contact');
    }
    public function store(Request $request){

        $requestData = [

            'first_name' =>$request->first_name,
            'last_name' =>$request->last_name,
            'email' =>$request->email,
            'message' =>$request->message,
            'user_id' =>$request->user_id,


        ];

        // dd($requestData);
        Contact::create($requestData);

        // Hostipal::create($request->all());
        return view('../frontend/contact')->withMessage('Successfully message');
    }
}