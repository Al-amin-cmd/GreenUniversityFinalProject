<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function donation(){
        return view('../frontend/danation');
    }
}