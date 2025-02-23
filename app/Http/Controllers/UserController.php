<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showUsers(){
        $users = DB::table('users')->get();
        return $users;
    }

    public function showAllUsers(){
        // $allusers   =   DB::select('select name,age from users 
        //                     where id=:id',['id'=>2], "and age=:age",['age'=>18]);
        //$udpatedata =   DB::update("UPDATE users SET email='abc@gmail.com' WHERE id=?",[2]);
        $deletedta      =   DB::delete("DELETE from users where id=?",[8]);
        //return $allusers;
    }
}
