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

/*Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    $name = "Sya Raihan Heggi";
    return view('about', ['name' => $name]);
});*/

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/mahasiswa','MahasiswaController@index');

//Students
Route::get('/students','StudentController@index');  
Route::get('/students/create','StudentController@create');
Route::get('/students/{student}','StudentController@show');
Route::post('/students','StudentController@store');
Route::delete('students/{student}','StudentController@destroy');
Route::get('/students/{student}/edit','StudentController@edit');
Route::post('/students/edit/{student}','StudentController@update');

//route::resource('/student','StudentController')