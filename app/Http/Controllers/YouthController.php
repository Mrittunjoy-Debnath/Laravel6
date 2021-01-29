<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YouthController extends Controller
{
    public function index(){
        return view('front-end.home.home');
    }
    public function category(){
        return view('front-end.home.category-products');
    }
    public function sign(){
        return view('front-end.home.sign-in');
    }
    public function contact(){
        return view('front-end.home.contact');
    }
    public function single(){
        return view('front-end.home.single');
    }
}
