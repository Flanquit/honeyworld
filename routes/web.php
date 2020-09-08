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

// Web Users URLs ////////////////////////////////////
Route::get('/', 'PagesController@home')->name('home');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/Apiary', 'PagesController@Apiary')->name('Apiary');
Route::get('/BeeRemoval', 'PagesController@BeeRemoval')->name('BeeRemoval');
Route::get('/Blog', 'PagesController@Blog')->name('Blog');
Route::get('/Contact', 'PagesController@Contact')->name('Contact');
Route::get('/Equipment', 'PagesController@Equipment')->name('Equipment');
Route::get('/Gallery', 'PagesController@Gallery')->name('Gallery');
Route::get('/Products', 'PagesController@Products')->name('Products');
Route::get('/Sustainable', 'PagesController@Sustainable')->name('Sustainable');
Route::get('/Training', 'PagesController@Training')->name('Training');

// Admin Side URLs ///////////////////////////////////
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/AdminAbout', 'HomeController@AdminAbout')->name('AdminAbout');
Route::post('/Add)' , 'HomeController@Add')->name('Add');
Route::post('/UpdateAbout)' , 'HomeController@UpdateAbout')->name('UpdateAbout');


