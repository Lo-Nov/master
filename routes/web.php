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


Route::get('/', 'HomeController@index')->name('home');
Route::get('/dashboard','DashboardController@index')->name('dashboard');
Route::get('/applications','DashboardController@newRegistrations')->name('applications');
//change status
Route::get('/registerUser','DashboardController@registerUser')->name('registerUser');
Route::post('/storeUser','DashboardController@storeUser')->name('storeUser');

//registerRole
Route::get('/registerRole','DashboardController@registerRole')->name('registerRole');
Route::post('/storeRole','DashboardController@storeRole')->name('storeRole');



Route::get('/change/{id}','DashboardController@change');
//login-custom
Route::post('/login-custom','CustomLoginController@loginCustom')->name('login.custom');


//Executive
Route::get('/parking','DashboardController@parking')->name('parking');


Auth::routes();


