<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function showHomeUser(){
        return view('pageview');
    }

    public function showUser(string $id=null){

        return view('pageuserview',compact('id'));
    }
    
    public function showBlog(){

        return view('blog');
    }
}
