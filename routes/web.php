<?php

use App\Http\Controllers\GenderController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/genders', [GenderController::class, 'index']);
Route::get('/gender/create', [GenderController::class, 'create']);

Route::post('/gender/store', [GenderController::class, 'store']);

Route::get('/users', [UserController::class, 'index']);