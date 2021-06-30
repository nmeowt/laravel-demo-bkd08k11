<?php

use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\MajorController;
use Illuminate\Support\Facades\Route;

// Authentication
Route::get('/login', [AuthenticateController::class, 'login'])->name('login');
Route::post('/login-process', [AuthenticateController::class, 'loginProcess'])->name('login-process');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// ngành học
Route::resource('major', MajorController::class);
