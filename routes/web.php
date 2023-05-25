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
//Route::get('/login', [TestController::class,'login']);
//Route::get('/', function () { return view('index');});
//Route::get('/login', function () { return view('login');});
Route::get('/login', [HomeController::class,'login'])->name('login');
Route::get('/', [HomeController::class,'index'])->name('home');
//Route::get('/welcome', [HomeController::class,'welcome']);

