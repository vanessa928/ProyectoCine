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
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
});

//Route::resourse('nombreRuta', 'nombreControlador');
//Route::resource('movies','MoviesController');
////Route::resource('movies', 'MoviesController');
Route::get('viewTable', 'MoviesController@viewTable');

//Route::resource('consumables', 'ConsumableController');
//Route::resource('rooms', 'RoomController');

Route::resources([
    'movies' => 'MoviesController',
    'consumables' => 'ConsumableController',
    'rooms' => 'RoomController',
    'entrances'=>'EntranceController',
    'fuction'=>'FuctionController'

]);

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
