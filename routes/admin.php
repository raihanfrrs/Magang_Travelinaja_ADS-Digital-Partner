<?php

use App\Http\Controllers\MasterController;
use Illuminate\Support\Facades\Route;



Route::group(['middleware' => ['cekUserLogin:admin']], function(){
    Route::controller(MasterController::class)->group(function () {
        // City Resources
        Route::get('city', 'index_city');
    });
});