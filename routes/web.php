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

Route::resource('/kpi', 'KpiController');
Route::resource('/performance', 'PerformanceController');
Route::resource('/roadmap', 'RoadmapController');