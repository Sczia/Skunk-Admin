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
        Schema::create('records', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('car_id'); /* kung NONG CAR NA DINALA NI CLIENT */
            $table->unsignedBigInteger('client_id'); /* kung sino ang cllient */
            $table->unsignedBigInteger('service_id'); /* kung sino ang cllient */
            $table->unsignedBigInteger('size_id'); /* kung sino ang cllient */
            $table->string('type')->default('new');

            $table->foreign('car_id')->references('id')->on('cars');
            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('service_id')->references('id')->on('services');
            $table->foreign('size_id')->references('id')->on('service_sizes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('records');
    }
};
