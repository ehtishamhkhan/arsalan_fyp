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


Route::get('map', function () {
    return view('map');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();


Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

Route::get('points', 'WebAppController@pointsView')->name('points');
Route::get('addpoints', 'WebAppController@addPointsView')->name('addpoints');
Route::post('addnewpoint', 'WebAppController@addNewPoint')->name('addnewpoint');

Route::get('routes', 'WebAppController@routesView')->name('routes');
Route::get('addroutes', 'WebAppController@addRoutesView')->name('addroutes');
Route::post('addnewroute', 'WebAppController@addNewRoute')->name('addnewroute');

Route::get('drivers', 'WebAppController@driversView')->name('drivers');
Route::get('adddrivers', 'WebAppController@addDriversView')->name('adddrivers');
Route::post('addnewdriver', 'WebAppController@addNewDriver')->name('addnewdriver');


Route::get('map', 'WebAppController@getcordinates')->name('map');
