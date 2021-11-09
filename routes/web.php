<?php


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/browse', function () {
    return view('browse');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/create', function () {
    return view('create');
});

Route::get('/anime', function () {
    return view('anime');
});

Route::get('/ver', function () {
    return view('ver');
});      
