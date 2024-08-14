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
            $table->foreignId('user_id')->constrained()->onDelete('CASCADE');
            $table->string('service_type');
            $table->string('pickup_street_address');
            $table->string('pickup_landmark');
            $table->string('pickup_city');
            $table->string('pickup_state');
            $table->string('dropoff_street_address');
            $table->string('dropoff_landmark');
            $table->string('dropoff_city');
            $table->string('dropoff_state');
            $table->date('expected_time');
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
