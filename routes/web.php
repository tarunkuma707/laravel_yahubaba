<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/post', function () {
//     return view('post');
// });

// Route::get('/post/firstpost', function () {
//     return view('firstpost');
// });


Route::prefix('page')->group(function(){
    Route::get('/about',function(){
        return view('about');
    })->name('about');
    
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

//Route::redirect('/about','/test', 301);

Route::fallback(function(){
    return view('pagenotfound');
});