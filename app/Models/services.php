<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'name', 'email', 'phone',
         'service_type', 'pickup_location',
          'dropoff_location', 'date', 'time', 
          'weight_desc', 'accept_terms',
    ];
}
