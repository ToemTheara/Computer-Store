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
Route::get('/', 'CategoryController@AllCategory');
Route::get('/apple', 'CategoryController@Apple');
Route::get('/msi', 'CategoryController@Msi');
Route::get('/dell', 'CategoryController@Dell');
Route::get('/lenovo', 'CategoryController@Lenovo');
Route::get('/asus', 'CategoryController@Asus');

#Route for Admin Page
Route::resource('computers', 'ComputerController');

