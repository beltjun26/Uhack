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

Route::get('/', function () { return view('welcome'); });
Route::get('/notifications', function () { return view('notifications'); });
Route::get('/workers', function () { return view('workers'); });
Route::get('/profile/worker', function () { return view('profile/worker'); });
Route::get('/profile/employer', function () { return view('profile/employer'); });
Route::get('/hire', function () { return view('hire'); });
Route::get('/search', function () { return view('search'); });
Route::get('/send', function () { return view('send'); });
Route::get('/notifications', function () { return view('notifications'); });
Route::get('/home', function () { return view('home'); });
Route::get('/payment', function () { return view('payment'); });

Route::get('/sendsms', 'ChikkaController@sendSMS');
Route::get('/transferFund', 'UBankController@TransferPay');
Route::get('/UBankAccount', 'UBankController@checkAccount');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
