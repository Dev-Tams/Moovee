<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ServicesFactory extends Factory
{
    

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'service_type' => fake()->randomElement(['Residential', 'Commercial']),
            'pickup_street_address' => fake()->streetAddress(),
            'pickup_landmark' => fake()->streetSuffix(),
            'pickup_city' => fake()->city(),
            'pickup_state' => fake()->city(["London", "Lagos", "LA"]),
            'dropoff_street_address' =>  fake()->streetAddress(),
            'dropoff_landmark' =>  fake()->streetSuffix(),
            'dropoff_city' => fake()->city(),
            'dropoff_state' => fake()->randomElement(["London", "Lagos", "LA"]),
            'expected_time' => fake()->date(),
            'weight_desc' => fake()->randomNumber(),
        ];
    }

    
}
