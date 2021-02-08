<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use DB;

class studentcontroller extends Controller
{
    function get(){
        //echo "hello";
        //return student::all();
        return DB::select(DB::raw('select * from students'));
    }
    function set(){
        //echo "hello";
        //return student::all();
        return DB::insert(DB::raw('insert into students values(114,"Ramesh",450)'));
    }
}
