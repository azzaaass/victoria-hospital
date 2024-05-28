<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user.index');
});
Route::get('/facilities', function () {
    return view('user.facilities');
});
Route::get('/information', function () {
    return view('user.information');
});
Route::get('/doctor', function () {
    return view('user.doctor');
});
Route::get('/pharmacy', function () {
    return view('user.pharmacy');
});
Route::get('/location', function () {
    return view('user.location');
});
Route::get('/profile', function () {
    return view('user.profile');
});

