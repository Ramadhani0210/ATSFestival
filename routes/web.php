<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/festivalkonser', function () {
    return view('pages.festivalkonser');
})->name('festivalkonser');

Route::get('/festivalbudaya', function () {
    return view('pages.festivalbudaya');
    
})->name('festivalbudaya');