<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //index
    public function home(){
        return view('pages.home');
    }

    // api
    public function posts_api(){
        return view('spa.posts');
    }
}
