<?php

Route::get('/', 'HomeController@index')->name('homepage');

Route::get('/blogs', 'BlogController@index')->name('blogs');

Route::get('/blogs/{id}','BlogController@view')->name('view_blog');

Route::get('/category/{slug}', 'CategoryController@index')->name('view_category');

Auth::routes();


Route::middleware(['auth'])->prefix('c_panel')->group(function () {

    Route::get('', 'ControlPanelController@index')->name('c_panel');

    Route::get('/categories', 'CategoryController@getList')->name('c_panel_categories_list');

    Route::get('/categories/create', 'CategoryController@create')->name('c_panel_categories_create');
    Route::post('/categories', 'CategoryController@add')->name('c_panel_categories_add');

    Route::get('/categories/{id}', 'CategoryController@update')->name('c_panel_categories_update');
    Route::put('/categories', 'CategoryController@edit')->name('c_panel_categories_edit');

    Route::delete('/categories', 'CategoryController@delete')->name('c_panel_categories_delete');

});
