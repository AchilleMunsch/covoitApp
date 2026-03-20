<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\EmployeController;
use App\Http\Controllers\VehiculeController;

Route::get('/employes', [EmployeController::class, 'index'])->name('employes.index');

Route::get('/employes/{id}', [EmployeController::class, 'show'])->name('employes.show');

Route::post('/employes/{id}/verifier', [EmployeController::class, 'verifier'])->name('employes.verifier');

Route::get('/vehicules/{id}', [VehiculeController::class, 'show'])->name('vehicules.show');

Route::get('/', [EmployeController::class, 'index']);