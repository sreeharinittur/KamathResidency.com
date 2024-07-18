<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomTypeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('dashboard');
});

//RoomTypr routes
Route::post('admin/roomtype',[RoomTypeController::class,'index']);
Route::get('admin/roomtype/create',[RoomTypeController::class,'create']);

