<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\InvestmentController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ConsultationRequestController;
use App\Http\Controllers\PropertyMonitoringController;
use App\Http\Controllers\UserActivityController;

Route::apiResource('users', UserController::class);
Route::apiResource('properties', PropertyController::class);
Route::apiResource('investments', InvestmentController::class);
Route::apiResource('messages', MessageController::class);
Route::apiResource('consultation-requests', ConsultationRequestController::class);
Route::apiResource('property-monitoring', PropertyMonitoringController::class);
Route::apiResource('user-activity', UserActivityController::class);
