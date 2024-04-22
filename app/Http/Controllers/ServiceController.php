<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
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
        $user = auth()->user();
        $service->user_id = $user->id;
        $service->save();

         // Send email
       //Mail::to($request->validated()['email'])->send(new ServiceConfirmed($service));
        return redirect('/')->with('success', 'Successfully booked, please check your email.');
    }

    /**
     * Display the specified resource.
     */
    /**
     * Display the specified resource.
     */
    public function show($id = null)
    {
        if ($id === null) {
            // Handle case where no ID is provided
            return view('service.show')->with('service', null);
        }

        // Fetch the service based on the provided ID
        $service = Service::findOrFail($id);

        // Check if the authenticated user owns the service
        if ($service->user_id !== auth()->id()) {
            abort(403, 'Unauthorized');
        }

        // Pass the service data to the view
        return view('service.show', ['service' => $service]);
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
