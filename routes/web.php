<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\RequirementController;
use App\Http\Controllers\Users\ProfileController;
use App\Http\Controllers\Users\RoleController;
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

// Admin Routes
Route::middleware(['auth','auth.admin'])->prefix('admin')->name('admin.')->group(function ()
{
    /* User Related Routes */
    Route::resource('/users', UserController::class);
    Route::resource('/roles', RoleController::class);
});

// User Related Pages
Route::middleware(['auth','verified'])->prefix('user')->name('user.')->group(function ()
{
    Route::resource('/profile', ProfileController::class);
});

Route::middleware(['auth', 'verified'])->group(function ()
{
    /* Listing Routes*/
    Route::resource('listings', ListingController::class);
    Route::resource('requirements', RequirementController::class);
});
