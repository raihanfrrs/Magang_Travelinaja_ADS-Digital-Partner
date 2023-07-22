<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\DealController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;


Route::controller(AboutController::class)->group(function () {
    Route::get('about', 'index');
    Route::get('about/{country}', 'show');
});

Route::controller(DealController::class)->group(function () {
    Route::get('deals', 'index');
});

Route::controller(ReservationController::class)->group(function () {
    Route::get('reservation', 'index');
});