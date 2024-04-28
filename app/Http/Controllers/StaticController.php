<?php

namespace App\Http\Controllers;


use App\Models\Statics;
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

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:255',
        ]);

        // Store the data in the database
        $contact = Statics::create($validatedData);
    

        return redirect('/')->with('success', 'submitted successfully, you will receive feedback soon!');
    }
    public function About(){
        //return view('Static/About');
        dd('welcome to about');
    }

    public function Testimonials(){
        //return view('Static/testimonials');
       
    }
}
