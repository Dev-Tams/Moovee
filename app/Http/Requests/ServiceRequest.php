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
            //
            'name' => 'required|string|min:2|max:50',
            'email' => 'required|string|min:6|max:255|email',
            'phone' => 'required|string', // Add phone validation if needed
            'service-type' => 'required|string|max:255',
            'pickup_street_address' => 'required|string',
            'pickup_landmark' => 'required|string',
            'pickup_city' => 'required|string',
            'pickup_region' => 'nullable|string',
            'pickup_state' => 'required|string',
            'pickup_country' => 'required|string',
            'dropoff_street_address' => 'required|string',
            'dropoff_landmark' => 'required|string',
            'dropoff_city' => 'required|string',
            'dropoff_region' => 'nullable|string',
            'dropoff_state' => 'required|string',
            'dropoff_country' => 'required|string',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'weight-desc' => 'nullable|string',
           // 'accept_terms' => 'exclude|required|accepted',
        ];
    }
    protected function passedValidation()
    {
        // Exclude accept_terms field from the validated data
        $this->merge([
            'accept_terms' => $this->request->get('accept_terms', null),
        ]);
    }


}
