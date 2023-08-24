<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Home;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::controller(Home::class)->group(function () {
    Route::get('/', 'index');
});

Route::controller(DashboardController::class)->group(function () {
    Route::get('/dashboard', 'index');
});
