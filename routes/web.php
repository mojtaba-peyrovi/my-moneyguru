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
    return view('home');
})->name('home');
Route::resource('/cars','CarController');
//car insurance
Route::get('/car-insurance','pagesController@getCarInsurance');
Route::post('/filters','filtersController@filters');

Route::get('/car-insurance/results','pagesController@getCarInsuranceResults')->name('ci-results');
