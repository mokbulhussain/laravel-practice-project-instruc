<?php

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

Route::get('/',[\App\Http\Controllers\FrontendController::class,'home'])->name('home');
Route::get('/about-us',[\App\Http\Controllers\FrontendController::class,'about'])->name('about');
Route::get('/contact-us',[\App\Http\Controllers\FrontendController::class,'contact'])->name('contact');
Route::get('/service',[\App\Http\Controllers\FrontendController::class,'service'])->name('service');

