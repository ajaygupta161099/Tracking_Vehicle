<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleReport extends Model
{
    use HasFactory;

    protected $table = 'vehicle_reports';

    protected $fillable = [
        'vehicle_no',
        'vehicle_id',
        'trip_id',
        'route',
        'route_km',
        'start_date',
        'edd',
        'vehicle_status',
        'idle_days',
        'location',
        'temp',
        'km_24',
        'ckm',
        'odometer_gps',
        'distance_traveled',
        'distance_pending',
        'estimated_arrival_date',
        'gps_status',
        'tracking_status',
        'remark',
        'reporting_hub',
        'reporting_date',
        'supervisor',
        'sales_person',
        'driver_name',
        'driver_number',

    ];

    }

