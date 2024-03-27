<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Mail\OrdersConfirmed;
use App\Mail\ServiceConfirmed;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ServiceRequest;

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
        
        $service = Service::create($request->validated());

        // Send email
     //   Mail::to($request->validated()['email'])->send(new ServiceConfirmed($service));

        return redirect('/')->with('booked', 'Successfully booked, please check your email.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
