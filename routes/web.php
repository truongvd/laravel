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

Route::get('students', 'StudentsController@index');
Route::get('students/create', [
    'as' => 'students.create',
    'uses' => 'StudentsController@create'
]);
Route::post('/students/savestudent', [
    'as' => 'students.savestudent',
    'uses' => 'StudentsController@savestudent'
]);