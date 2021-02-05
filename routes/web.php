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

Route::get('/','WelcomeController@Welcome');
Route::get('/UserDashboard','UserController@UserView');
Route::get('/CompletedAssignment','UserController@Completed');
Route::get('/ExpiredAssignment','UserController@Expired');
Route::get('/RewokAssignment','UserController@Rework');
Route::get('/Services','ServiceController@ServiceView');
Route::get('/Faq','FAQ@Faq');
Route::post('/Service','ServiceController@ServiceReq')->name('Services');
