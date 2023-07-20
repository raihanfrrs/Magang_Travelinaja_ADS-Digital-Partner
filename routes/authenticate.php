<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LayoutController;


Route::controller(LayoutController::class)->group(function () {
    Route::get('/', 'index')->name('/');
});

// Route::middleware('guest')->group(function () {
//     Route::controller(LoginController::class)->group(function () {
//         Route::post('login', 'cekLogin');
//     });

//     Route::controller(RegisterController::class)->group(function () {
//         Route::post('register', 'store');
//     });
// });

// Route::middleware('auth')->group(function () {
//     Route::controller(LogoutController::class)->group(function () {
//         Route::get('logout', 'index');
//     });
// });