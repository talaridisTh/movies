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
    return view('home');
});

Auth::routes();

Route::get("/", "MoviesController@index")->name("movies.index");
Route::get("movie/{id}", "MoviesController@show")->name("movies.show");
Route::get("actor/{id}", "MoviesController@showActor")->name("movies.actor");


Route::get("movie/{id}/video", "MoviesController@showVideo")->name("movies.video");


Route::get("movie/{id}/imdb", "MoviesController@showImdb")->name("movies.imdb");

Route::get("actor/{id}/imdb", "MoviesController@showImdbActor")->name("actor.imdb");


