<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
            'service_type', 'pickup_street_address', 'pickup_landmark',
            'pickup_city',  'pickup_state', 'pickup_country', 'dropoff_street_address',
            'dropoff_landmark', 'dropoff_city',  'dropoff_state', 'dropoff_country',
            'date', 'time', 'weight_desc', //'accept_terms'
    ];
}
