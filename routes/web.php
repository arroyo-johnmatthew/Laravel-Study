<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Short-hand route definition
Route::view('/about', 'about');
Route::view('/contact', 'contact');
