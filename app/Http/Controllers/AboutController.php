<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){

        // dd("kisu ase");
         return view('../frontend/about');
     }
}