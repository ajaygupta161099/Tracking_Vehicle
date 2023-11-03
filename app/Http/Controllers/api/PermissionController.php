<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Permission;
use App\Models\Module;
use Validator;

class PermissionController extends Controller
{
    public function addPermission(Request $request)
    {
        //echo '<pre>'; print_r($request->all()); die;
        // Define validation rules
        $rules = [
            'user_id'    => 'required',
            'company_id' => 'required',
            'module_id'  => 'required',
            'status'     => 'required',
        ];

        // Create a validator instance
        $validator = Validator::make($request->all(), $rules);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400); // You might want to use a 400 status code for validation errors.
        }

        // If validation passes, create a new permission record
        $permission = Permission::create($request->all());

        return response()->json('Permission data successfully added', 201); // You can use a 201 status code for successful resource creation.
    }
        function getModulebyCompany(Request $request)
        {
            $module =  Permission::with('module')->where('company_id', $request->company_id)->get();


           // echo '<pre>'; print_r($permission); die;
           if ($module->isNotEmpty()) {
            return response()->json($module, 200); // Return the modules as a JSON response with a 200 status code.
        } else {
            return response()->json(['message' => 'this field is required company_id'], 404); // Return a 404 status code if no modules are found.
        }
    }


        }


