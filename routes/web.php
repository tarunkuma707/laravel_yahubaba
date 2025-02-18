<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/post', function () {
    return view('post');
});

Route::get('/temp',function(){
    return view('pages.temp');
});
// Route::get('/post', function () {
//     return view('post');
// });

// Route::get('/post/firstpost', function () {
//     return view('firstpost');
// });


Route::prefix('page')->group(function(){
    Route::get("/post",function(){
        return view('post');
    })->name('post');
    
    Route::get("/gallery",function(){
        return view('gallery');
    })->name('gallery');
});

//Route::view('post','/post');

// Route::get('/hello', function () {
//     return view('post');
// });


Route::fallback(function(){
    return view('pagenotfound');
});