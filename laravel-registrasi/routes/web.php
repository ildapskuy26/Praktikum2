<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/register', 'register');

use App\Http\Controllers\RegisterController;

Route::post('/submit', [RegisterController::class, 'submit']);