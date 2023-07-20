<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;


Route::controller(LayoutController::class)->group(function () {
    Route::get('/', 'index')->name('/');
});

Route::middleware('guest')->group(function () {
    Route::controller(LoginController::class)->group(function () {
        Route::get('sign-in', 'index');
        Route::post('sign-in', 'cekLogin');
    });

    Route::controller(RegisterController::class)->group(function () {
        Route::get('sign-up', 'index');
        Route::post('sign-up', 'store');
    });
});

Route::middleware('auth')->group(function () {
    Route::controller(LogoutController::class)->group(function () {
        Route::get('sign-out', 'index');
    });
});