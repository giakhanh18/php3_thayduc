<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClockController;
use App\Http\Controllers\Khanh1Controller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;
use App\Models\Khanh1;
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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('products', ProductController::class);
Route::resource('khanh1s',Khanh1Controller::class);
Route::resource('category',CategoryController::class);
Route::resource('students',StudentController::class);
Route::resource('clocks',ClockController::class,);