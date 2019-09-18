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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'PagesController@index')->name('main')->middleware('guest');;

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', 'PagesController@dashboard')->name('dashboard');
    Route::get('/page1', 'PagesController@page1')->name('page1');
    Route::get('/page2', 'PagesController@page2')->name('page2');
    Route::get('/page3', 'PagesController@page3')->name('page3');
    Route::get('/page4', 'PagesController@page4')->name('page4');
    Route::get('/page5', 'PagesController@page5')->name('page5');
});
