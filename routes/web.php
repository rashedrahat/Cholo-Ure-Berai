<?php

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');

Route::get('/search/action', 'LiveSearchController@action');

Route::resource('posts', 'PostsController');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
