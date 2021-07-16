<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    // Homepage-area
    public function index()
    {
       
        return view('frontend.home');
    }
    public function posts()
    {
        return view('frontend.posts');
    }
    public function singlePost()
    {
        return view('frontend.single-post');
    }
    public function tag()
    {
        return view('frontend.tag');
    }
}
