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

Route::get('/', function () {
    return view('file.home'    )   ;
});

 
 Route::get('/home', 'FileController@index' );
 


 Route::resource('/','FileController');
  
  
 



Route::get('/search', 'FileController@search' );


 
 
 
 
