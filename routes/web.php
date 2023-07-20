<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/sidebar', function(){
    return view('sidebar');
});

Route::get('/sample', function(){
    return dd();
});
