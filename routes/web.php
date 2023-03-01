<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\myController;
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
Route::get('/khoahoc/{id}',[\App\Http\Controllers\myController::class,'detail'])->name('kh');
Route::get('contact',[\App\Http\Controllers\myController::class,'contact'])->name('contact');
Route::post('postcontact',[\App\Http\Controllers\myController::class,'postcontact'])->name('postcontact');
