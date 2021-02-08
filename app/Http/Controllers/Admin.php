<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin extends Controller
{
    function admin(){
        //echo "Admin Controller";
        return view('adminpage');
    }
}
