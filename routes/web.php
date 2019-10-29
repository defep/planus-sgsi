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

Auth::routes();

Route::get('/', function() {
    return View::make("landing");
})->name('landing');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('assets', 'AssetController');
Route::resource('threats', 'ThreatController');
Route::resource('security-plans', 'SecurityPlanController');