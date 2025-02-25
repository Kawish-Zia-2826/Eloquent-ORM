<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployessController;
use App\Http\Controllers\JsonController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('employess', EmployessController::class);
Route::resource('json',JsonController::class);
