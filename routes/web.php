<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::view('first','first');

Route::get('/testid/{id}', function ($id) {
echo $id;
    return view('testid');
});

Route::get('index','App\Http\Controllers\User@index');
Route::get('home','App\Http\Controllers\User@home');
Route::get('about','App\Http\Controllers\User@about');
Route::get('services','App\Http\Controllers\User@services');

Route::view('compage','compage');
Route::view('st1','st1');
Route::view('st2','st2');
Route::view('st3','st3');

Route::get('admin','App\Http\Controllers\Admin@admin');
Route::view('form','form');
Route::post('FormSub','App\Http\Controllers\formsub@index');

Route::get('web',function(){
  return view('web',array('name'=>'Amit'));
});

Route::view('news1','news1');
//->middleware('UserCheck'); //for route middleware


Route::view('deny','deny');  //for global middleware

Route::group(['middleware'=>['UserCheck']], function(){    //for group middleware
  Route::view('news2','news2');                      //for multiple paths & multiple view pages
  Route::view('first','first');
});

Route::view('form1','form1');
Route::post('FormSub1','App\Http\Controllers\formsub1@index');

Route::get('session_set','App\Http\Controllers\session@session_set');
Route::get('session_get','App\Http\Controllers\session@session_get');
Route::get('session_remove','App\Http\Controllers\session@session_remove');
Route::get('session_check','App\Http\Controllers\session@session_check');


Route::get('select','App\Http\Controllers\DB_test@select');
Route::get('insert','App\Http\Controllers\DB_test@insert');
Route::get('delete','App\Http\Controllers\DB_test@delete');
Route::get('update','App\Http\Controllers\DB_test@update');

Route::get('get_data','App\Http\Controllers\studentcontroller@get');
Route::get('set_data','App\Http\Controllers\studentcontroller@set');