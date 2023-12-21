<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('customers/create',[\App\Http\Controllers\CustomerController::class,'create']);
Route::get('/',[\App\Http\Controllers\CustomerController::class,'index'])->name('customers.index');
Route::get('customers/{customer}/edit',[\App\Http\Controllers\CustomerController::class,'edit']);
Route::post('customers',[\App\Http\Controllers\CustomerController::class,'store']);
Route::put('customer/{customer}',[\App\Http\Controllers\CustomerController::class,'update']);
Route::delete('customers/{customer}',[\App\Http\Controllers\CustomerController::class,'destroy']);




