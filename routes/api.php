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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');

Route::post('cars', 'CarController@create');
Route::get('cars', 'CarController@search');
Route::delete('cars/{id}', 'CarController@delete');
Route::get('cars/{id}', 'CarController@view');
Route::put('cars/{id}', 'CarController@edit');

Route::group(['middleware' => 'auth:api'], function(){
    Route::get('profile', 'UserController@details');
});

