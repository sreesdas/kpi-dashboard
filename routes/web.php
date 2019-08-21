<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', 'DashboardController@index');
Route::get('/dashboard/{id}', 'DashboardController@show');

Route::get('/monitoring', 'MonitoringController@index' );

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
