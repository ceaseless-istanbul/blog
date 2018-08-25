<?php

Route::get('/', 'HomeController@homepage')->name('homepage');

Route::get('/blogs', 'BlogController@index')->name('blogs');

Route::get('/blogs/{id}','BlogController@view')->name('view_blog');

Route::get('/category/{slug}', 'CategoryController@index')->name('view_category');
