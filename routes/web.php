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

// admin
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    Route::view('/', 'admin.index')->name('index');

    // admin/regions
    Route::prefix('regions')->name('regions.')->group(function () {
        Route::get('/', 'RegionController@index')->name('index');
        Route::get('{region}/edit', 'RegionController@edit')->name('edit');
        Route::post('/', 'RegionController@store')->name('store');
        Route::patch('{region}', 'RegionController@update')->name('update');
        Route::delete('{region}', 'RegionController@destroy')->name('destroy');
    });

    // admin/artist-tagcats
    Route::prefix('artist-tagcats')->name('artist_tagcats.')->group(function () {
        Route::get('/', 'ArtistTagcatController@index')->name('index');
        Route::get('{artistTagcat}/edit', 'ArtistTagcatController@edit')->name('edit');
        Route::post('/', 'ArtistTagcatController@store')->name('store');
        Route::patch('{artistTagcat}', 'ArtistTagcatController@update')->name('update');
        Route::delete('{artistTagcat}', 'ArtistTagcatController@destroy')->name('destroy');
    });

    // admin/artist-tags
    Route::prefix('artist-tags')->name('artist_tags.')->group(function () {
        Route::get('/', 'ArtistTagController@index')->name('index');
        Route::get('{artistTag}/edit', 'ArtistTagController@edit')->name('edit');
        Route::post('/', 'ArtistTagController@store')->name('store');
        Route::patch('{artistTag}', 'ArtistTagController@update')->name('update');
        Route::delete('{artistTag}', 'ArtistTagController@destroy')->name('destroy');
    });
});

// test-views
Route::prefix('test-views')->name('test_views.')->group(function () {
    Route::view('/', 'test_views.index')->name('index');
    Route::view('/test-alert', 'test_views.test_alert')->name('test_alert');
    Route::view('/test-alert-with', 'test_views.test_alert_with')->name('test_alert_with');
    Route::view('/test-my-callout', 'test_views.test_my_callout')->name('test_my_callout');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
