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

Route::get('/', 'ContentsController@index')->name('home');
Route::get('/client', 'ClientController@index')->name('clients');
Route::get('/client/new', 'ClientController@newClient')->name('new_client');
Route::post('/client/new', 'ClientController@newClient')->name('create_client');
Route::get('/client/{client_id}', 'ClientController@show')->name('show_client');
Route::post('/client/{client_id}', 'ClientController@modify')->name('update_client');

Route::get('/reservation/{client_id}', 'RoomsController@checkAvailableRoom')->name('check_room');
Route::post('/reservation/{client_id}', 'RoomsController@checkAvailableRoom')->name('check_room');

Route::get('/book/room/{client_id}/{room_id}/{date_in}/{date_out}', 'ReservationsController@bookRoom')->name('book_room');

Route::get('/title', 'ClientController@getClientTitle');

Route::get('/facades/db', function () {
    return DB::select('Select * from table');
    // return view('welcome');
});

Route::get('/facades/encrypt', function () {
    return Crypt::encrypt('12345678');
    // return view('welcome');
});
//eyJpdiI6IjRISTV2WEY3SExDcUhLZXY0RmJBT1E9PSIsInZhbHVlIjoieHg3ZElPb24rUVgwN0NPWjBnOVJDQT09IiwibWFjIjoiNzY1NWFiYWE4NWZkODY3MmZiYjE2ZTE4ZmQ0YTQyOGZkYzE4YWY1OWYzYTMxMTIzMTRhZDY5ODhiZGExZjQ0OCJ9

Route::get('/facades/decrypt', function () {
    return Crypt::decrypt('eyJpdiI6IjRISTV2WEY3SExDcUhLZXY0RmJBT1E9PSIsInZhbHVlIjoieHg3ZElPb24rUVgwN0NPWjBnOVJDQT09IiwibWFjIjoiNzY1NWFiYWE4NWZkODY3MmZiYjE2ZTE4ZmQ0YTQyOGZkYzE4YWY1OWYzYTMxMTIzMTRhZDY5ODhiZGExZjQ0OCJ9');
    // return view('welcome');
});


