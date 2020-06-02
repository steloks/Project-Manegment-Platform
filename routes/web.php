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
    return view('home');
});


//Route::middleware(['first', 'second'])->group(function () {
//    Route::get('/', function () {
//        // Uses first & second Middleware
//    });
//
//    Route::get('user/profile', function () {
//        // Uses first & second Middleware
//    });
//});
Route::group(['prefix' => 'clientarea'], function () {
    Route::get('/', ['as' => 'home', 'uses' => 'ClientAreaController@logged']);

    Route::group(['prefix' => 'profile'], function () {
        Route::get('/', ['as' => 'settings', 'uses' => 'ClientAreaController@settings']);
    });

    Route::group(['prefix' => 'teams'], function () {
        Route::get('/', ['as' => 'home', 'uses' => 'ClientAreaController@team']);
    });

    Route::group(['prefix' => 'projects'], function () {
        Route::get('/', ['as' => 'home', 'uses' => 'ClientAreaController@home']);
        Route::get('/tasks', ['as' => 'tasks', 'uses' => 'ClientAreaController@tasks']);
        Route::get('/activity', ['as' => 'activity', 'uses' => 'ClientAreaController@activity']);
        Route::get('/calendar', ['as' => 'calendar', 'uses' => 'ClientAreaController@calendar']);
        Route::get('/files', ['as' => 'files', 'uses' => 'ClientAreaController@files']);

    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
