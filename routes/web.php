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

Route::get('/', 'HomeController@index')->name('home');
/**** About us page route **/
Route::get('/aboutus', [
    'uses' => 'HomeControllers\HomeController@getAboutus',
    'as'   => 'aboutus'
    ]);

/**** Portfolio us page route **/
Route::get('/portfolio', [
    'uses' => 'HomeControllers\HomeController@getPortfolio',
    'as'   => 'portfolio'
    ]);

/**** Dashborad page route **/
Route::get('/dashboard', [
    'uses' => 'BlogControllers\ViewController@getDashboard',
    'as'   => 'dashboard'
    ]);
/**** Dashborad page route **/
Route::get('/upload-view', [
    'uses' => 'BlogControllers\ViewController@getUploadFileView',
    'as'   => 'upload-view'
    ]);
/**** Dashborad page route **/
Route::post('/upload', [
    'uses' => 'BlogControllers\ViewController@postUploadFile',
    'as'   => 'upload'
    ]);