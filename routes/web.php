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
Route::get('/',"pagesController@getIndex");
Route::get('about', 'pagesController@getabout');
Route::get('contact','pagesController@getContact');
Route::resource('posts','PostController');
Route::post('update','PostController@baraUpdate');

Route::group(['middleware'=>['web']],function (){

});
