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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('/');

Route::get('/{id}', 'HomeController@viewfile')->name('viewfile');

Route::POST('/upload_files', 'HomeController@upload_files')->name('upload_files');

Route::PUT('/update_files/{id}', 'HomeController@update_files')->name('update_files');
