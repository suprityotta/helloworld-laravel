<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DB_test extends Controller
{
    function select(){
        //echo "select";
        //return DB::table('user')->count();
        return DB::select(DB::raw('select * from user'));
    }
    function insert(){
       // echo "insert";
       return DB::insert(DB::raw('insert into user values(103,"Anand","Bangalore")'));
    }
    function delete(){
        //echo "delete";
        return DB::delete(DB::raw('delete from user where id=101'));
    }
    function update(){
        //echo "update";
        return DB::update(DB::raw('update user set city="Patna" where id=103'));
    }
}
