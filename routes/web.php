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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('image-upload', 'ImageUploadController@imageUpload')->name('image.upload');
Route::post('image-upload', 'ImageUploadController@imageUploadPost')->name('image.upload.post');
Route::get('captains', 'CaptainController@index')->name('captains');
Route::get('general_information', 'PagesController@generalinformation')->name('general_information');
Route::get('btrt_membership','PagesController@btrtMembership')->name('btrt_membership');
Route::get('getting_started','PagesController@gettingStarted')->name('getting_started');
Route::get('game_played','PagesController@gamePlayed')->name('game_played');
Route::get('commissions_and_referrals','PagesController@commissions')->name('commissions');
Route::get('how_to_get_your_room_playing', 'PagesController@getYourRoomPlaying')->name('getRoomPlaying');
Route::get('how_to_play_from_home', 'PagesController@playFromHome')->name('playFromHome');
Route::get('streaming', 'PagesController@streaming')->name('streaming');
Route::get('rules', 'PagesController@rules')->name('rules');