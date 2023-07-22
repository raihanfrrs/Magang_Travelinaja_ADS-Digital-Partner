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

Route::middleware('auth')->group(function () {
    Route::controller(ReservationController::class)->group(function () {
        Route::get('reservation', 'index');
        Route::get('reservation/{city}', 'show');
        Route::post('reservation', 'store');
        Route::get('reservation/checkout/{checkout}', 'checkout');
        Route::put('reservation/checkout/{checkout}', 'payment');
        Route::get('reservation/checkout/{checkout}/invoice', 'invoice');
    });
});