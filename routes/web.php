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

Route::resource('films', 'FilmController');
Route::get('/films/{slug}', 'FilmController@show')->name('films.view');
Route::get('/films/{id}/edit', 'FilmController@edit')->name('films.edit');
Route::put('/films/{id}', 'FilmController@update')->name('films.update');
Route::post('/films', 'FilmController@store')->name('films.store');
Auth::routes();

Route::group(['middleware' => 'auth'], function () {
	Route::post('/films/comment', 'FilmController@createComment')->name('films.comment.store');	
});
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function () {
    return redirect()->route('films.index');
});
