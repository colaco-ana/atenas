<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::resource('author','AuthorController');
Route::resource('authorUser','AuthorUserController');
Route::resource('category','CategoryController');
Route::resource('categoryPublication','CategoryPublicationController');
Route::resource('categoryUser','CategoryUserController');
Route::resource('job','JobController');
Route::resource('news','NewsController');
Route::resource('newsSize','NewsSizeController');
Route::resource('newsTopic','NewsTopicController');
Route::resource('newsUser','NewsUserController');
Route::resource('publication','PublicationController');
Route::resource('search','SearchController');
Route::resource('searchType','SearchTypeController');
Route::resource('topic','TopicController');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
