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
    return redirect()->route('flightManageIndex');
});

Route::get('manage-flight','FlightmanageController@index')->name('flightManageIndex');
Route::post('manage-flight','FlightmanageController@addFlight')->name('addFlight');

Route::get('manage-booking','BookingController@index')->name('bookingManageIndex');
Route::post('manage-booking','BookingController@addBooking')->name('addBooking');
Route::post('checkin','BookingController@checkinUpdate')->name('checkin');

Route::get('seat-status','BookingController@seatStatus')->name('seatStatus');
Route::post('seat-status','BookingController@checkseatStatus')->name('checkseatStatus');

Route::get('passenger-list','PassengerController@index')->name('passengerListIndex');
Route::post('passenger-list','PassengerController@passengerList')->name('passengerList');

