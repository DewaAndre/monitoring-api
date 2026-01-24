<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\RakController;
use App\Http\Controllers\Api\MonitoringController;

Route::post('/users', [UserController::class, 'store']);
Route::get('/users', [UserController::class, 'index']);

Route::post('/raks', [RakController::class, 'store']);

Route::post('/monitorings', [MonitoringController::class, 'store']);
