<?php

use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\StudentController;
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

    // sinh viên
    Route::resource('student', StudentController::class);

    Route::name('file.')->group(function () {
        Route::get('/form', [FileController::class, 'viewForm'])->name('view-form');
        Route::post('/upload-file', [FileController::class, 'uploadFile'])->name('upload-file');
        Route::get('/get-all-file', [FileController::class, 'getAllFile'])->name('get-all-file');
        Route::post('/download-file', [FileController::class, 'downloadFile'])->name('download-file');
    });
});
