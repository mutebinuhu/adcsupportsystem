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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//these route is for collecting data
Route::get('/adc', 'fieldDataController@index');
Route::post('/adc', 'fieldDataController@store');
Route::get('/adc/show/{id}', 'fieldDataController@show');


//end-of--these route is for collecting data


//these routes are for sending editing and closing tickets from banks

Route::get('/tickets', 'ticketsController@index');
Route::post('/tickets', 'ticketsController@store');
Route::get('/tickets/show/{id}', 'ticketsController@show');
Route::patch('/tickets/show/{id}', 'ticketsController@update');
Route::post('/tickets/delete/{id}', 'ticketsController@destroy');

Route::post('/tickets/branchvisit', 'ticketsController@storeBranchVisit');
//end of--these routes are for sending editing and closing tickets from banks

//send a visit
Route::get('/visit', 'BranchVisitsController@store'); 



//admin Routes
Route::get('/admin', 'AdminController@index');
