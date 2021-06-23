<?php

use App\Http\Controllers\MajorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Quản lý ngành học
// Xem
// Thêm 
Route::get('major/create', [MajorController::class, 'create']);
Route::post('major/store', [MajorController::class, 'store']);
// Sửa
// Xóa
