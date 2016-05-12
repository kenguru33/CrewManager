<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::auth();

Route::get('/', 'HomeController@index');



//Route::get('users','Crew\CrewController@index')->middleware(\App\Http\Middleware\IsGlobalAdmin::class);

/*Route::get('users','Crew\CrewController@index')->middleware('global_admin');

Route::get('users','Crew\CrewController@index')->middleware(['global_admin']);

Route::get('users','Crew\CrewController@index',['middelware'], 'global_admin');*/

Route::resource('user','api\UserController');


Route::get('users/sms', 'Users\UserController@sendSms');
Route::get('users/jsonlist', 'Users\UserController@jsonlist');

Route::get('users/destroy{user}', 'Users\UserController@destroy');

Route::get('users/list', 'Users\UserController@list');
Route::get('users', 'Users\UserController@index');
Route::get('users/create', 'Users\UserController@create');