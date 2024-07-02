<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('login', function () {
    return view('login');
})->name('login');

Route::get('/admin/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/admin/user', function () {
    return view('user');
})->name('user');

Route::get('/admin/product', function () {
    return view('product');
})->name('product');
