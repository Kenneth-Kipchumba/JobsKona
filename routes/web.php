<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\Users\UserController;
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

Route::get('/', function () {
    return view('frontend/home');
});

Route::get('home', function () {
    return view('frontend/home');
});

/* User Routes */
Route::get('users', [UserController::class, 'index']);

/* Listing Routes*/
Route::resource('listings', ListingController::class);
