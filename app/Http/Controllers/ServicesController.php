<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;


class ServicesController extends Controller
{
    //

    public function index()
    {
        return view('services/index');
    }

    public function show()
    {
        return view('services/show');
    }

    public function store(Request $request)
    {
        // dd(request()->all());

        //create a new quote using the db 
        //save to the db
        //redirect
        $validatedData =$request->validate([
            'name'=> 'required|string|min:2|max:50',
            'email'=> 'required|string|min:6|max:255|email',
            'service-type' => 'required|string|max:255',
            'pickup-location' => 'required|string',
            'dropoff-location' => 'required|string',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i', 
            'weight-desc' => 'nullable|string',
            'accept_terms' => 'exclude|required|accepted'
        ]);


        $quote = new Services();
        $quote->name = $validatedData['name'];
        $quote->email = $validatedData['email'];
        $quote->phone = $validatedData['phone'];
        // Assign other fields as well
        $quote->save();

    }
}
