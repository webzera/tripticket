<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/checkflight', 'Api\FlightsearchController@checkflight');

// Service Name 					URL

// Search Service 					https://apitest.tripjack.com/fms/v1/air-search-all
// FareRule Service 				https://apitest.tripjack.com/fms/v1/farerule
// Review Service 					https://apitest.tripjack.com/fms/v1/review
// Book Service (Instant Ticket)	https://apitest.tripjack.com/oms/v1/air/book
// Book Service (Hold) 				https://apitest.tripjack.com/oms/v1/air/book
// Confirm Fare Before Ticket 		https://apitest.tripjack.com/oms/v1/air/fare-validate
// Book Service (Confirm Hold Book) https://apitest.tripjack.com/oms/v1/air/confirm-book
// Booking Details 					https://apitest.tripjack.com/oms/v1/booking-details
// Release PNR(Hold) 				https://apitest.tripjack.com/oms/v1/air/unhold
// Seat Service 					https://apitest.tripjack.com/fms/v1/seat

