<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/ShowJobs', 'user@showJobs');
Route::get('/Company/post','PostController@PostJob');
Route::get('/Company/{id}','user@IndexC');
Route::get('/Details','user@seeJob');
Route::get('/Admin','user@AdminIndex');
Route::get('/moreJobs','user@viewMore');

