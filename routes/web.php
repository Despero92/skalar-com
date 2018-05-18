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
Route::get( '/', [ 'uses' => 'HomeController@index', 'as' => 'home' ] );
Route::post( 'message', [ 'uses' => 'HomeController@store', 'as' => 'message.store' ] );
Route::get( 'message/{id}/edit', [ 'uses' => 'HomeController@edit', 'as' => 'message.edit' ] )->where( [ 'id' => '[0-9]+' ] );
Route::get( 'message/{id}/update', [ 'uses' => 'HomeController@update', 'as' => 'message.update' ] );
Route::get( 'message/{id}/delete', [ 'uses' => 'HomeController@delete', 'as' => 'message.delete' ] );
