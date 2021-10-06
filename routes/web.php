<?php

use App\Http\Controllers\DataSiswaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('album', function () {
    return view('profile.album');
}) -> name('album');

Route::get('index', function () {
    return view('profile.index');
}) -> name('index');
