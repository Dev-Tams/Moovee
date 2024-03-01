<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Requests\ServiceRequest;


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

    public function store(ServiceRequest $request)
    {


        //create a new quote using the db 
        //save to the db
        //redirect
        $validated = $request->validated();
           
            // Create a new instance of the Service model
            $service = new Service();

            // Assign validated data to model attributes
            $service->name = $request['name'];
            $service->email = $request['email'];
            $service->phone = $request['phone'];
            $service->service_type = $request['service-type'];
            $service->pickup_location = $request['pickup-location'];
            $service->dropoff_location = $request['dropoff-location'];
            $service->date = $request['date'];
            $service->time = $request['time'];
            $service->weight_desc = $request['weight-desc'];

            // Save the record to the database
            $service->save();

            // Optionally, you can return a response or redirect to another page
            return response()->json(['message' => 'Service request submitted successfully'], 200);
            redirect('/');
        
}
}
