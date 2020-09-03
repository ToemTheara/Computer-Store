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
Route::get('/computer_detail/{computer_id}', 'AllComputerController@show');
#Route for Apple Products
Route::get('/apple', 'AppleController@index');
Route::get('/apple_detail/{computer_id}', 'AppleController@show');

#Route for MSI Products
Route::get('/msi', 'MsiController@index');
Route::get('/msi_detail/{computer_id}', 'MsiController@show');

#Route for DELL Products
Route::get('/dell', 'DellController@index');
Route::get('/dell_detail/{computer_id}', 'DellController@show');

#Route for Lenovo Products
Route::get('/lenovo', 'LenovoController@index');
Route::get('/lenovo_detail/{computer_id}', 'LenovoController@show');

#Route for ASUS Products
Route::get('/asus', 'AsusController@index');
Route::get('/asus_detail/{computer_id}', 'AsusController@show');

#Route for Admin Page
Route::resource('computers', 'ComputerController');

#Route for Search
Route::get('/search-product', 'SearchController@search');



