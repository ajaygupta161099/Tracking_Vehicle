<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\VehicleReport;
use Illuminate\Http\Request;
use Validator;

class VehicleReportController extends Controller
{
    public function store(Request $request)
       {
           $validator = Validator::make($request->all(), [
               'vehicle_no'     => 'required',
               'vehicle_id'     => 'required',
               'trip_id'        => 'sometimes',
               'route'          => 'sometimes',
               'route_km'       => 'sometimes',
               'start_date'     => 'sometimes',
               'edd'            => 'sometimes',
               'vehicle_status' => 'sometimes',
               'idle_days'      => 'sometimes',
               'location'       => 'sometimes',
               'temp'           => 'sometimes',
               'km_24'          => 'sometimes',
               'ckm'            => 'sometimes',
               'odometer_gps'   => 'sometimes',
               'distance_traveled' => 'sometimes',
               'distance_pending'  => 'sometimes',
               'estimated_arrival_date' => 'sometimes',
               'gps_status'      => 'sometimes',
               'tracking_status' => 'sometimes',
               'remark'          => 'sometimes',
               'reporting_hub'   => 'sometimes',
               'reporting_date'  => 'sometimes',
               'supervisor'      => 'sometimes',
               'sales_person'    => 'sometimes',
               'driver_name'     => 'sometimes',
               'driver_number'   => 'sometimes',
           ]);

           if ($validator->fails()) {

               return response()->json($validator->errors());
               }
               else
                {
                   $vehicle = VehicleReport::where('vehicle_no', $request->vehicle_no)->first();

               if(!empty($vehicle) && ($vehicle->vehicle_no==$request->vehicle_no))
               {
                 return response()->json(['message' => 'vehicle_no allready Maped',$vehicle->vehicle_id]);
               }
               else{

               $data = $request->all([
                   'vehicle_id',
                   'vehicle_no',
               ]);

               VehicleReport::updateOrCreate(['vehicle_id' => $data['vehicle_id']], $data);

               return response()->json(['message' => 'Vehicle Report updated or created successfully.']);
           }
        }
       }
   }


