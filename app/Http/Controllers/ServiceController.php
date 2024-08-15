<?php

namespace App\Http\Controllers;


use App\Models\Services;
use App\Mail\ServiceConfirmed;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ServiceRequest;

/**
 * @group Service Management
 * 
 * APIs to book, manage, and view services
 */
class ServiceController extends Controller
{

    /**
     * Show the service booking form.
     *
     * @response 200
     */
    public function index()
    {
        return view('service/index');
    }

    /**
     * Show the service booking form.
     *
     * @response 200
     */
    public function quote()
    {
        return view('Service.quote');
    }

    /**
     * Show the service creation form.
     * 
     * @response 200
     */
    public function create()
    {
        return view('service/create');
    }

    /**
     * Store a newly created service.
     * @response 302 {
     *   "message": "Successfully booked, please check your email."
     * }
     */
    public function store(ServiceRequest $request)
    {

        $userId = auth()->id();
        $validated = $request->validated();
        $validated['user_id'] = $userId;
        $service = Services::create($validated);

        Mail::to($validated['email'])->send(new ServiceConfirmed($service));

        return redirect('/')->with('success', 'Successfully booked, please check your email.');
    }


    /**
     * Display a list of booked service for the authenticated user.
     * 
     * @authenticated
     * 
     * @response 200 {
     *   "data": [
     *      {
     *        "id": 1,
     *        "service_type": "residential",
     *        "pickup_city": "Cityville",
     *        "dropoff_city": "Townburg",
     *        "expected_time": "2025-01-01",
     *        "weight_desc": "Light load"
     *      }
     *    ]
     * }
     */
    public function show()
    {
        $userId = Auth::id();

        $services = Services::whereUserId($userId)->get();
        return view(
            'service.show',
            ['services' => $services]
        );
    }

    /**
     * Manage a specific service.
     * 
     * @urlParam services int required The ID of the service. Example: 1
     * 
     * @response 200
     */
    public function manage(Services $services)
    {

        return view('service.manage', [
            'services' => $services
        ]);
    }

    /**
     * Edit a specific service.
     * 
     * @urlParam services int required The ID of the service. Example: 1
     * 
     * @response 200
     */
    public function edit(Services $services)
    {
        return view('service.edit', [
            'services' => $services
        ]);
    }

    /**
     * Update a specific service.
     * 
     * @response 200 {
     *   "message": "Service updated successfully."
     * }
     */
    public function update(ServiceRequest $request, Services $services)
    {
        Auth::id();
        $validated = $request->validated();

        $services->update($validated);

        return view('service.manage', [
            'services' => $services
        ]);
    }
    /**
     * Delete a service.
     * 
     * @urlParam services int required The ID of the service. Example: 1
     * 
     * @response 204 {
     *   "message": "Service deleted successfully."
     * }
     */
    public function destroy(Services $services)
    {
        $services->delete();
    }
}
