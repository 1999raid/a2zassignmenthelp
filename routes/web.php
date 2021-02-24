<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

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
Route::view('getquote','givequoteform');
Route::post('getquote',[WelcomeController::class,'addData']);
Route::get('academic','ServiceController@academic_writing_services');
Route::get('management','ServiceController@management_writing_services');
Route::get('finance','ServiceController@finance_assignment_help');
Route::get('nursing','ServiceController@nursing_assignment_help');
Route::get('economics','ServiceController@economics_assignment_help');
Route::get('statistics','ServiceController@statistics_assignment_help');
Route::get('engineering','ServiceController@engineering_assignment_help');
Route::get('law','ServiceController@law_assignment_help');
Route::get('humanities','ServiceController@humanities_assignment_help');
Route::get('business','ServiceController@business_report_help');
Route::view('assignment','assignment_writing');
Route::view('dissertation','dissertation_writing');
Route::view('essay','essay_writting');
Route::view('programming','programming_assignment');
Route::view('homework','homework_help');
Route::view('thesis','thesis_help');
Route::view('research','research_writing_service');
Route::view('cdr','cdr_help');
Route::view('proof','proof_reading_help');