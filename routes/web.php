<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoControllers;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('video',VideoControllers::class);
