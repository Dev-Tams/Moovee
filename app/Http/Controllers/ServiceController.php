<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Mail\ServiceConfirmed;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ServiceRequest;
use App\Models\Services;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('service/index');
    }

    /**
     * Show the form for creating a new resource.
     */
    
    public function create()
    {
        return view('service/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ServiceRequest $request)
    {
        // Retrieve the authenticated user ID
        $userId = auth()->id();

       //the service/create method does not have a userid passed to it
       
        // Add the user ID to the validated request data
        $data = $request->validated();
        $data['user_id'] = $userId;

        // Create the new service with user ID included
        $service = Services::create($data);

        // Send email
        // Mail::to($data['email'])->send(new ServiceConfirmed($service));

        return redirect('/')->with('success', 'Successfully booked, please check your email.');
    }

    /**
     * Display the specified resource.
     */
    /**
     * Display the specified resource.
     */
    public function show()
    {


        return view('service.show', ['services' => auth()->user()->services()->get()]);
   

    }
     

       


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function quote(){
        return view('Service.quote');
    }
}
