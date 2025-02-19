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

function getUsers(){
    return $names  =   [
        1   =>["name"=>"Arun","phone"=>"98767","City"=>"Delhi"],
        2   =>["name"=>"Tarun","phone"=>"98767","City"=>"Nagpur"],
        3   =>["name"=>"RachnaHERE","phone"=>"98767","City"=>"Chandigarh"],
        4   =>["name"=>"Rachna","phone"=>"98767","City"=>"Chandigarh"]
    ];
}


Route::get('/users',function(){
    $names  =   getUsers();
    return view('users',[
    'user'=>$names]);
    // return view ('users')
    // ->with("user","Yahoo")
    // ->with("city","Delhi");
    //return view('users')->withUser("test")->withCity("Chandigarh");
});

Route::get('user/{id}',function ($id){
    $users   =   getUsers();
    abort_if(!isset($users[$id]),404);
    $user    =   $users[$id];
    return view('user',['id'=>$user]);
})->name('view.user');

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