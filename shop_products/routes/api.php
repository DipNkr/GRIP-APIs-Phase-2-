<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
 
Route::post('/create','apicontrol@store');

Route::get('/read','apicontrol@show');

Route::get('/read/{id}','apicontrol@showbyid');

Route::put('/update/{id}','apicontrol@update');

Route::delete('/delete/{id}','apicontrol@delete');