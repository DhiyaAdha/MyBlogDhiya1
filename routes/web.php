<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// controller
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LocalizationController;

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

Route::get('/localization/{language}',[LocalizationController::class, 'switch'])->name('localization.switch');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('layouts.dashboard');
});

Auth::routes([
    'register' => false, // Registration Routes...
    // 'reset' => false, // Password Reset Routes...
    // 'verify' => false, // Email Verification Routes...
]);


Route::group(['prefix' => 'dashboard', 'middleware' => ['auth']], function () {
    // dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
    // categories
    Route::resource('/categories', CategoryController::class);
});