<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\DealController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['cekUserLogin:admin']], function(){
    Route::controller(CityController::class)->group(function () {
        Route::get('city', 'index');
        Route::get('city/add', 'add');
        Route::post('city', 'store');
        Route::get('city/{city}/edit', 'edit');
        Route::put('city/{city}', 'update');
        Route::get('/dataCity', [CityController::class, 'dataCity'])->name('dataCity');
    });

    Route::controller(CountryController::class)->group(function () {
        Route::get('country', 'index');
        Route::get('country/add', 'add');
        Route::post('country', 'store');
        Route::get('country/{country}/edit', 'edit');
        Route::put('country/{country}', 'update');
        Route::get('/dataCountry', [CountryController::class, 'dataCountry'])->name('dataCountry');
    });

    Route::controller(DealController::class)->group(function () {
        Route::get('deals', 'index');
        Route::get('deals/add', 'add');
        Route::post('deals', 'store');
        Route::get('deals/{deals}/edit', 'edit');
        Route::put('deals/{deals}', 'update');
        Route::get('/dataDeals', [DealController::class, 'dataDeals'])->name('dataDeals');
    });
});