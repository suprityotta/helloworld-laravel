<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class session extends Controller
{
    function session_set(Request $r){
        $r->session()->put('name','suprit');

    }
    function session_get(Request $r){
        echo $r->session()->get('name');
    }
    function session_remove(Request $r){
        $r->session()->forget('name');
        
    }
    function session_check(Request $r){
        if($r->session()->has('name')){
            echo "yes";
        }
        else{
            echo "no";
        }
        
    }
}
