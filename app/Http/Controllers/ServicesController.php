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


        $validatedData = $request->validated();
        $service = new Service();
        
        $service->name = $validatedData['name'];
        $service->email = $validatedData['email'];
        $service->phone = $validatedData['phone'];
        $service->service_type = $validatedData['service-type'];
        $service->pickup_street_address = $validatedData['pickup_street_address'];
        $service->pickup_landmark = $validatedData['pickup_landmark'];
        $service->pickup_city = $validatedData['pickup_city'];
        $service->pickup_region = $validatedData['pickup_region'];
        $service->pickup_state = $validatedData['pickup_state'];
        $service->pickup_country = $validatedData['pickup_country'];
        $service->dropoff_street_address = $validatedData['dropoff_street_address'];
        $service->dropoff_landmark = $validatedData['dropoff_landmark'];
        $service->dropoff_city = $validatedData['dropoff_city'];
        $service->dropoff_region = $validatedData['dropoff_region'];
        $service->dropoff_state = $validatedData['dropoff_state'];
        $service->dropoff_country = $validatedData['dropoff_country'];
        $service->date = $validatedData['date'];
        $service->time = $validatedData['time'];
        $service->weight_desc = $validatedData['weight-desc'];

        $service->save();
        return redirect('/');
    }
}

