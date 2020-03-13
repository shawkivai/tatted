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

Auth::routes();

Route::post('/home', 'HomeController@ajax_get_postcode')->name('home.ajax_get_postcode');
Route::post('/ajax_get_suburb_list', 'HomeController@ajax_get_suburb_list')->name('home.ajax_get_suburb_list');
Route::post('/save_user_information', 'HomeController@save_user_information')->name('home.save_user_information');

Route::get('/business-registration', 'BusinessController@index')->name('business.register');

Route::get('/business-login', 'BusinessController@login')->name('business.login');

