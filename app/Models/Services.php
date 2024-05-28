<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Services extends Model
{
    use HasFactory;
    protected $fillable = [
            'user_id', 'service_type', 'pickup_street_address', 'pickup_landmark',
            'pickup_city',  'pickup_state', 'pickup_country', 'dropoff_street_address',
            'dropoff_landmark', 'dropoff_city',  'dropoff_state', 'dropoff_country',
            'date', 'time', 'weight_desc', //'accept_terms'
    ];
    /**
     * Get the user that owns the phone.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
