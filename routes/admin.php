<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\DealController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['cekUserLogin:admin']], function(){
    Route::controller(AdminController::class)->group(function () {
        Route::get('user', 'index');
        Route::get('user/add', 'add');
        Route::post('user', 'store');
        Route::get('user/{user}/edit', 'edit');
        Route::put('user/{user}', 'update');
        Route::get('/dataUser', [AdminController::class, 'dataUser'])->name('dataUser');
    });

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
        Route::get('deal', 'deal');
        Route::get('deal/add', 'add');
        Route::post('deal', 'store');
        Route::get('deal/{deal}/edit', 'edit');
        Route::put('deal/{deal}', 'update');
        Route::get('/dataDeal', [DealController::class, 'dataDeal'])->name('dataDeal');
    });
});