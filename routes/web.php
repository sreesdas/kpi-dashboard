<?php
use App\Kpi;
use App\Performance;
use App\QuarterlyPerformance;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', 'HomeController@test' );

Route::get('/dashboard', 'HomeController@index');
Route::get('/dashboard/{id}', 'HomeController@show');
Route::get('/dashboard/{id}/yearly', 'DashboardController@show');

Route::get('/monitoring', 'MonitoringController@index' );
Route::get('/monitoring/{id}', 'MonitoringController@show' );

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/kpi/create', 'KpiController@create' );
Route::post('/kpi/create', 'KpiController@store' );

Route::get('/performance/create', 'PerformanceController@create');
Route::post('/performance/create', 'PerformanceController@store');
