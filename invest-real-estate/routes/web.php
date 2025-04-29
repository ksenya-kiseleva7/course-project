<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\InvestmentController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ConsultationRequestController;
use App\Http\Controllers\PropertyMonitoringController;
use App\Http\Controllers\UserActivityController;

// Пример дополнительной страницы

Route::get('/', function () {
    return view('index');
});

Route::get('/ui', function () {
    return view('ui');
});

// Ресурсные маршруты для web-интерфейса
Route::resource('users', UserController::class);
Route::resource('properties', PropertyController::class);
Route::resource('investments', InvestmentController::class);
Route::resource('messages', MessageController::class);
Route::resource('consultation-requests', ConsultationRequestController::class);
Route::resource('property-monitoring', PropertyMonitoringController::class);
Route::resource('user-activity', UserActivityController::class);


