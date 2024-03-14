<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    // controller for static pages

    public function Index()
    {
        return view('index');
    }

    public function Contact(){
        return view('Static/contact');
    }

    public function About(){
        //return view('Static/About');
        dd('welcome to about');
    }

    public function Testimonials(){
        //return view('Static/testimonials');
       
    }
}
