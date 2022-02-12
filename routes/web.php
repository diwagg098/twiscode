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

Route::get('/', 'TransaksiController@index');

Route::get('/biner', function () {
    return view('biner');
});
Route::get('/decimal', function () {
    return view('decimal');
});
Route::post('/binertodecimal', 'TwiscodeController@binarytodecimal');
Route::post('/decimaltobiner', 'TwiscodeController@decimaltobinary');


Route::get('polindrome', function () {
    return view('polindrome');
});
Route::post('polindrome', 'TwiscodeController@polindrome');
