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


// Contact page
// Route::get('contact', 'PagesController@getContact');

// About page
// Route::get('about', 'PagesController@getAbout');

// Home page
// Route::get('/', 'PagesController@getIndex');

Route::get('/', 'PostsController@index');

Route::get('/posts/{post}/', 'PostsController@show');

Route::post('/posts/', 'PostsController@create');

Route::put('/posts/{posts}/', 'PostsController@update');

Route::delete('/posts/{posts}/', 'PostsController@delete');

