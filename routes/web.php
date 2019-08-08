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
    return view('welcome');
});
route::get('/testconnect', 'MainController@testconnect')->name('testconnect');

Route::prefix('v1')->namespace('API')->group(function () {
	// Controllers Within The "App\Http\Controllers\Admin" Namespace
	Route::get('/users','UserController@index');
	Route::get('/users/{id}','UserController@getUser');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/list', 'MainController@list')->name('list');