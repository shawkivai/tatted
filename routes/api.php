<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('company/store', 'CompanyController@store')
    ->name('api.company.store');

Route::get('/states', 'StateController@index')
    ->name('api.state.index');

Route::get('/state/{stateId}/postcode', 'StateController@statePostcodes')
    ->name('state.postcodes');

Route::get('/state/{stateId}/suburb', 'StateController@stateSuburbs')
    ->name('state.suburbs');

Route::post('/company/emailValidation', 'ValidationController@emailValidation')
    ->name('company.emailValidation');

Route::post('/company/nameValidation', 'ValidationController@companyNameValidation')
    ->name('company.nameValidation');

Route::post('/company/passwordValidation', 'ValidationController@passwordValidation')
    ->name('company.passwordValidation');