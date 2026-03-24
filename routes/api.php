<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\EmployeController;
use App\Http\Controllers\Api\VehiculeController;

Route::apiResource('employes', EmployeController::class);
Route::apiResource('vehicules', VehiculeController::class);