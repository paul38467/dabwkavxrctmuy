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
\Debugbar::disable();

Route::get('/', function () {
    return view('welcome');
});

// test-views
Route::prefix('test-views')->name('test_views.')->group(function () {
    Route::view('/', 'test_views.index')->name('index');
    Route::view('/test-alert', 'test_views.test_alert')->name('test_alert');
    Route::view('/test-alert-with', 'test_views.test_alert_with')->name('test_alert_with');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
