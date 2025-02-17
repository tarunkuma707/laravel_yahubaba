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

Route::get("/post/{id?}/comment/{commentid?}/id/{otherid?}/song/{songvalue?}",function(string $id=null,string $commentId=null, $otherid=null){
    if($id){
        return "<h1>POST $id</h1>
                <h2>Comment Id $commentId</h2>";
    }
    else{
        echo "<h1>No ID Found</h1>";
    }
})->where("id",'[a-zA-Z]+')->whereAlphaNumeric("commentid")->whereAlpha('otherid')->whereIn('song',['romantic','sad','devotional']);

//Route::view('post','/post');

// Route::get('/hello', function () {
//     return view('post');
// });