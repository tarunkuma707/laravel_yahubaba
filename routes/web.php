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


Route::get('/users',function(){
    $names  =   array(
        array("name"=>"Arun","phone"=>"98767","City"=>"Delhi"),
        array("name"=>"Tarun","phone"=>"98767","City"=>"Nagpur"),
        array("name"=>"RachnaHERE","phone"=>"98767","City"=>"Chandigarh"),
        array("name"=>"Rachna","phone"=>"98767","City"=>"Chandigarh")
    );
    return view('users',[
    'user'=>$names]);
    // return view ('users')
    // ->with("user","Yahoo")
    // ->with("city","Delhi");
    //return view('users')->withUser("test")->withCity("Chandigarh");
});

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