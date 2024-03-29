<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('countries', 'CountryController@index');
Route::get('states/{id}', 'StateController@index');
Route::get('allstates', 'StateController@allstates');
Route::get('locations', 'LocationController@index');
Route::post('register', 'UserController@register');
Route::post('updateprofile', 'UserController@update');
Route::get('playerGoals/{id}', 'GoalsController@index');
Route::post('addgoal', 'GoalsController@addgoal');