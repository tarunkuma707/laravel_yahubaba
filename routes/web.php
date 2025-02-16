<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post', function () {
    return view('post');
});

Route::get('/post/firstpost', function () {
    return view('firstpost');
});

//Route::view('post','/post');

// Route::get('/hello', function () {
//     return view('post');
// });