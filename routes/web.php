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
Route::get('/login', function () {
    return view('auth.login');
});
Route::view('/', 'home')->name('home');
Route::get('/student', 'StudentController@index')->name('student');
Route::get('/campus', 'CampusController@index')->name('campus');
Route::get('/facultys', 'FacultysController@index')->name('facultys');
Route::get('/programs', 'ProgramsController@index')->name('programs');
//Route::get('/home', 'HomeController@index')->name('home');

/*Route::get('/home', function () {
    return view('welcome');
});
*/

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');



//oute::get('/home', 'HomeController@index')->name('home');


