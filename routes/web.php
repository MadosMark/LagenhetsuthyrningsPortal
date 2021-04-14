<?php

declare(strict_types=1);

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublishController;
use App\Models\Apartment;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'login')->name('login')->middleware('guest');
Route::post('login', LoginController::class);
Route::get('logout', LogoutController::class);
Route::get('dashboard', DashboardController::class)->middleware('auth');
Route::get('profile', ProfileController::class)->middleware('auth');
Route::view('publish', 'publish')->middleware('auth');
Route::post('publish', PublishController::class)->middleware('auth');
Route::get('apply/{}', function (Apartment $apartment) {
    return view('apply', ['apartment' => $apartment]);
})->middleware('auth');
Route::view('register', 'register');
Route::post('register', RegisterController::class);
