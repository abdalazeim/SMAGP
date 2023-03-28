<?php

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
Route::resource('products','ProductController');
Route::resource('projects','ProjectsController');
Route::resource('p','ProjectsController@create');
Route::resource('specs','SpecController');
Route::resource('projects','ProjectController');
Route::resource('sups','SupController');
Route::resource('students','StudentController');
Route::resource('sources','SourceController');
Route::resource('meetings','MeetingeController');
Route::resource('pprojecs','PprojecController');
Route::resource('download','DownloadController');
Route::resource('messages','MessageController');
Route::resource('tasks','TaskController');
Route::resource('/wepstudents','wepstudentsController');
Route::resource('/sup','websupController');
Route::resource('calender','CalenderController');
Route::resource('supervisor','wepsupsController');
//Route::resource('/stindex','wepstudentsController');
Route::get('/stindex', 'wepstudentsController@st')->name('stindex');
Route::resource('shospprojec','ShospprojecController');
Route::get('/schedule', function () {
    return view('web.schedule');
});