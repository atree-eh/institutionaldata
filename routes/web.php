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

Route::get('/', 'InstitutionController@index');

/*Route::get('viewdata', 'View_data_Controller@index');*/

Route::get('viewdata/{id}','InstitutionController@show');

Route::get('editdata/{id}','InstitutionController@edit');

/*Route::post('updatedate', array('uses' => 'InstitutionController@update'));
*/
Route::post('updatedata','InstitutionController@update');

Route::get('delete/{id}', 'InstitutionController@destroy');

Route::get('create', 'InstitutionController@create');

Route::post('store', 'InstitutionController@store');

Route::get('navbar', function(){
	return view('navbar');
});