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


Route::post('/user','UserController@register');
Route::get('/movies','MoviesController@getMovies');
Route::delete('/deletemovies/{id}','MoviesController@deletemovies');
Route::patch('/bookmovies/{id}/{seats_available}','MoviesController@bookmovies');
Route::post('/login','UserController@login');

