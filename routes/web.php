<?php

use App\Http\Controllers\GenderController;
use Illuminate\Support\Facades\Route;

Route::get('/genders', [GenderController::class, 'index']);