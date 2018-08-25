<?php

Route::get('/', 'HomeController@index')->name('homepage');

Route::get('/blogs', 'BlogController@index')->name('blogs');

Route::get('/blogs/{id}','BlogController@view')->name('view_blog');

Route::get('/category/{slug}', 'CategoryController@index')->name('view_category');

Auth::routes();

Route::get('c_panel', 'ControlPanelController@index')
      ->name('c_panel')
      ->middleware('auth');
