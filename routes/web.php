<?php

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
Route::get('/main',[\App\Http\Controllers\myController::class,'main']);
Route::get('/khoahoc1',[\App\Http\Controllers\myController::class,'detail1'])->name('k1');
Route::get('/khoahoc2',[\App\Http\Controllers\myController::class,'detail2']);
Route::get('/khoahoc3',[\App\Http\Controllers\myController::class,'detail3']);
Route::get('/khoahoc',[\App\Http\Controllers\myController::class,'khoahoc']);
