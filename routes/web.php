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

Route::group( [ 'prefix' => 'Slave', 'namespace' => 'Slave' ], function () {

	Route::get( "/start", [ "uses" => "SlaveController@Start" ] );
	Route::get( "/block", [ "uses" => "SlaveController@block" ] );
	Route::get( "/unblock", [ "uses" => "SlaveController@unblock" ] );
	Route::get( "/refresh", [ "uses" => "SlaveController@refresh" ] );
	Route::get( "/Status", [ "uses" => "SlaveController@Status" ] );
	Route::get( "/export/{count?}", [ "uses" => "SlaveController@export" ] );


	Route::get( "/build", [ "uses" => "UpdateController@build" ] );
	Route::get( "/restore", [ "uses" => "BackupController@restore" ] );

});

Route::group( [ 'prefix' => 'Master', 'namespace' => 'Master' ], function () {

});