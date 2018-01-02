<?php

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
use Illuminate\Http\Request;
use App\code;
Route::get('/', function () {
    $titles = code::all();
    
    return view('curd',[ 'titles' => $titles]);
});

Route::get('/code',function(){
    
    return view('code');
});

Route::post('/code','CodeController@index');

Route::get('/download/{id}','CodeController@download');