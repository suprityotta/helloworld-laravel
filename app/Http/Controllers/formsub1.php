<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formsub1 extends Controller
{
    function index(Request $request){
        $request->validate([                    //for validating the form
           'name'=>'required|min:6',
           'email'=>'required|min:8'
        
        ]);
        $request->file('doc')->store('media');
        echo "Form submitted successfully";
    }
}
