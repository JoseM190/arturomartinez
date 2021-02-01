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

//Route::get('/', 'LandingController@index');
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
Auth::routes(['verify' => true]);
Route::get('/', 'HomeController@index')->middleware('verified');
Route::resource('students', 'StudentController');
Route::resource('assistances', 'AssistanceController');
Route::resource('subjects', 'SubjectController');
Route::resource('themes', 'ThemeController');
Route::resource('questions', 'QuestionController');
Route::resource('details', 'DetailController');
Route::resource('exams', 'ExamController');
Route::resource('messages', 'MessagesController');
