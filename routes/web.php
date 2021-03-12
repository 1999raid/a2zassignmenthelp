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

Route::get('/', 'WelcomeController@Welcome');
Route::get('Fair_use_of_policy/', 'WelcomeController@Fair_use_of_policy');
Route::get('Get_to_know_us/', 'WelcomeController@Get_to_know_us');
Route::get('Legit_essays/', 'WelcomeController@Legit_essays');
Route::get('Premium/', 'WelcomeController@Premium');
Route::get('Privacy_policy/', 'WelcomeController@Privacy_policy');
Route::get('Term_of_use/', 'WelcomeController@Term_of_use');
Route::get('Revision_and_refund/', 'WelcomeController@Revision_and_refund');
Route::get('Resume_builder/', 'WelcomeController@Resume_builder');
Route::get('/UserDashboard', 'UserController@UserView');
Route::get('/CompletedAssignment', 'UserController@Completed');
Route::get('/ExpiredAssignment', 'UserController@Expired');
Route::get('/RewokAssignment', 'UserController@Rework');
Route::get('/Services', 'ServiceController@ServiceView');
Route::get('/Faq', 'FAQ@Faq');
Route::get('academic', 'ServiceController@academic_writing_services');
Route::get('management', 'ServiceController@management_writing_services');
Route::get('finance', 'ServiceController@finance_assignment_help');
Route::get('nursing', 'ServiceController@nursing_assignment_help');
Route::get('economics', 'ServiceController@economics_assignment_help');
Route::get('statistics', 'ServiceController@statistics_assignment_help');
Route::get('engineering', 'ServiceController@engineering_assignment_help');
Route::get('law', 'ServiceController@law_assignment_help');
Route::get('humanities', 'ServiceController@humanities_assignment_help');
Route::get('business', 'ServiceController@business_report_help');
Route::get('assignment', 'ServiceController@assignment_writing');
Route::get('dissertation', 'ServiceController@dissertation_writing');
Route::get('essay', 'ServiceController@essay_writting');
Route::get('programming', 'ServiceController@programming_assignment');
Route::get('homework', 'ServiceController@homework_help');
Route::get('thesis', 'ServiceController@thesis_help');
Route::get('research', 'ServiceController@research_writing_service');
Route::get('cdr', 'ServiceController@cdr_help');
Route::get('proof', 'ServiceController@proof_reading_help');
