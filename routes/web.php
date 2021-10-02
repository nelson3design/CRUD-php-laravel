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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::prefix('/')->group(function(){


    Route::get('/','App\Http\Controllers\configController@list');

    Route::get('add','App\Http\Controllers\configController@add');
     Route::post('add','App\Http\Controllers\configController@addAction');

      Route::get('edit/{id}','App\Http\Controllers\configController@edit');
      Route::put('update/{id}','App\Http\Controllers\configController@update');
    
     

       Route::get('/{id}','App\Http\Controllers\configController@del');

     
   
});