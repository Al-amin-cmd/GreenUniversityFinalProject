<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function service(){

        $posts = Post::all();

        //dd($posts);
        return view('../frontend/service', compact('posts'));
    }
}