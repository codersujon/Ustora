<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Fronend Home Page
Route::get('/', function () {
    return view('frontend.index');
});

// Dashboard
Route::get('/dashboard', function () {
    return view('backend.dashboard');
});

// Login
Route::get('/login', function () {
    return view('backend.login');
});

// Register
Route::get('/register', function () {
    return view('backend.register');
});