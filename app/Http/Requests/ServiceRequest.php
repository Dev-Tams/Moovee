<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'service_type' => 'required|string|max:255',
            'pickup_street_address' => 'required|string',
            'pickup_landmark' => 'required|string',
            'pickup_city' => 'required|string',
            'pickup_state' => 'required|string',
            'dropoff_street_address' => 'required|string',
            'dropoff_landmark' => 'required|string',
            'dropoff_city' => 'required|string',
            'dropoff_state' => 'required|string',
            'expected_time' => 'required|string',
            'weight_desc' => 'nullable|string',
            'accept_terms' => 'required|accepted',
        ];
    }
    public function register()
    {
        // ...
        $this->app->bind(ServiceRequest::class, function () {
            return new ServiceRequest();
        });
    }
}
