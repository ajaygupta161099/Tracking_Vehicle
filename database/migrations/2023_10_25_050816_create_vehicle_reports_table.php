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
        Schema::create('vehicle_reports', function (Blueprint $table) {
            $table->id();
            $table->string('vehicle_no');
            $table->string('vehicle_id');
            $table->string('trip_id')->nullable();
            $table->string('route')->nullable();
            $table->string('route_km')->nullable();
            $table->string('start_date')->nullable();
            $table->string('edd')->nullable();
            $table->string('vehicle_status')->nullable();
            $table->string('idle_days')->nullable();
            $table->string('location')->nullable();
            $table->string('temp')->nullable();
            $table->string('km_24')->nullable();
            $table->string('ckm')->nullable();
            $table->string('odometer_gps')->nullable();
            $table->string('distance_traveled')->nullable();
            $table->string('distance_pending')->nullable();
            $table->string('estimated_arrival_date')->nullable();
            $table->string('gps_status')->nullable();
            $table->string('tracking_status')->nullable();
            $table->string('remark')->nullable();
            $table->string('reporting_hub')->nullable();
            $table->string('reporting_date')->nullable();
            $table->string('supervisor')->nullable();
            $table->string('sales_person')->nullable();
            $table->string('driver_name')->nullable();
            $table->string('driver_number')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicle_reports');
    }
};
