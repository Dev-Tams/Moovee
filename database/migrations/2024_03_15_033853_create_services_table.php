<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('service_type');
            $table->string('pickup_street_address');
            $table->string('pickup_landmark');
            $table->string('pickup_city');
            $table->string('pickup_region')->nullable();
            $table->string('pickup_state');
            $table->string('pickup_country');
            $table->string('dropoff_street_address');
            $table->string('dropoff_landmark');
            $table->string('dropoff_city');
            $table->string('dropoff_region')->nullable();
            $table->string('dropoff_state');
            $table->string('dropoff_country');
            $table->date('date');
            $table->time('time');
            $table->text('weight_desc')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
