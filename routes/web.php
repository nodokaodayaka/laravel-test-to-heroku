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

Route::post('/result', "QuestionnarieController@result");
Route::get('/', "QuestionnarieController@index");

Route::any('/{any}', function(){
    abort(404);
});