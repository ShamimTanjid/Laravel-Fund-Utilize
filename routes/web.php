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
    return redirect()->route('login');
    //view('welcome')
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/index','FundReceivedController@INdex');
Route::post('/insert','FundReceivedController@StoreFund');
Route::get('/allfund','FundReceivedController@ShowFund');
Route::get('/view/{Tr_No}','FundReceivedController@SingleView');
Route::get('/edit/{Tr_No}','FundReceivedController@EidtFund');
Route::post('/update/{Tr_No}','FundReceivedController@UpdateFund');
Route::get('/delete/{Tr_No}','FundReceivedController@DeleteFund');

