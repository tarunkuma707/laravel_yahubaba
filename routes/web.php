<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test',function(){
    return view('about');
});

// Route::get('/post', function () {
//     return view('post');
// });

// Route::get('/post/firstpost', function () {
//     return view('firstpost');
// });

Route::get("/page/post",function(){
    return view('post');
    });

//Route::view('post','/post');

// Route::get('/hello', function () {
//     return view('post');
// });

Route::redirect('/about','/test', 301);