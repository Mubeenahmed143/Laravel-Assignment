<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimplonsBeauty extends Controller
{
    public function home(){
        return view('welcome');
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function gallery(){
        return view('gallery');
    }
}
