<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    function home(){
    return view('MyPage.home');
}
    function index(){
    return view('MyPage.index');
}
    function about(){
    return view('MyPage.about');
}
    function services(){
    return view('MyPage.services');
}
}
