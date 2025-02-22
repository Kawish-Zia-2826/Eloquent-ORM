<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployessController;
Route::get('/', function () {
    return view('welcome');
});

Route::resource('employess', EmployessController::class);
