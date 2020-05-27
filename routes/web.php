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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/index', "TeacherController@index");
Route::get('/edit/{id}', "TeacherController@edit");
Route::get('/store', "TeacherController@store");
Route::get('/update ', "TeacherController@update");
Route::get('/show/{id}', "TeacherController@show");
Route::get('/create', "TeacherController@create");
Route::get('/search', 'Teachercontroller@search');
Route::resource('teachers', 'TeacherController');
Route::get('/upload/csv','UploadController@csv');
