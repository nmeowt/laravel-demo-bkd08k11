<?php

use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\MajorController;
use App\Http\Middleware\CheckLogged;
use App\Http\Middleware\CheckLogin;
use Illuminate\Support\Facades\Route;

Route::middleware([CheckLogged::class])->group(function () {
    // Authentication
    Route::get('/login', [AuthenticateController::class, 'login'])->name('login');
    Route::post('/login-process', [AuthenticateController::class, 'loginProcess'])->name('login-process');
});

Route::middleware([CheckLogin::class])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('welcome');

    // ngành học
    Route::resource('major', MajorController::class);

    Route::get("/logout", [AuthenticateController::class, 'logout'])->name('logout');
});
