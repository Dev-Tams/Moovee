<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Services
 * 
 * @property string $service_type
 * @property string $phone_number
 * @property string $pickup_street_address
 * @property string $pickup_landmark
 * @property string $pickup_city
 * @property string $pickup_state
 * @property string $dropoff_street_address
 * @property string $dropoff_landmark
 * @property string $dropoff_city
 * @property string $dropoff_state
 * @property string $expected_time
 * @property string $weight_desc
 * 
 */

class Services extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'service_type',
        'pickup_street_address',
        'pickup_landmark',
        'pickup_city',
        'pickup_state',
        'dropoff_street_address',
        'dropoff_landmark',
        'dropoff_city',
        'dropoff_state',
        'expected_time',
        'weight_desc',
    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id');
    }
}
