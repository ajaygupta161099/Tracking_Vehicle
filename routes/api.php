<?php

use Illuminate\Http\Request;
use App\Http\Controllers\api\VehicleReportController;
use App\Http\Controllers\api\DocumentController;
use App\Http\Controllers\api\PermissionController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('storeVehicle', [VehicleReportController::class, 'store']);

Route::post('insertDocument', [DocumentController::class, 'insert']);

Route::post('updateDocument/{id}', [DocumentController::class,'update']);

Route::post('addpermission', [PermissionController::class, 'addPermission']);

Route::post('getModulebyCompany', [PermissionController::class, 'getModulebyCompany']);
