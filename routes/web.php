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



#Route for User Page
Route::get('/', 'AllComputerController@index');
Route::get('/apple', 'AppleController@index');
Route::get('/msi', 'MsiController@index');
Route::get('/dell', 'DellController@index');
Route::get('/lenovo', 'LenovoController@index');
Route::get('/asus', 'AsusController@index');

#Route for Admin Page
Route::resource('computers', 'ComputerController');

