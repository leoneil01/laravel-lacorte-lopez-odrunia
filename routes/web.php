<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function () {
    return view('user.index');
});

Route::get('/create', function () {
    return view('user.create');
});

Route::get('/edit', function () {
    return view('user.edit');
});

Route::get('/delete', function () {
    return view('user.delete');
});

Route::get('/index', function () {
    return view('user.index');
});