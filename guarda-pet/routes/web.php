<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/adote', function () {
    return view('adote');
})->name('adote');
Route::get('/pet', function () {
    return view('pet');
})->name('pet');
