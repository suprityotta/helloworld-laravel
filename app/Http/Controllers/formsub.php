<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formsub extends Controller
{
    function index(Request $request){
        //echo "Form Submitted successfully";
        //return $request->method();
        //return $request->url();
        //return $request->path();
        //return $request->post();
        return $request->post('name');
    }
}
