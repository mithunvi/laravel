<?php


Route::any('hosue', 'HomeController@index');
Route::any('do_reg', 'HomeController@do_reg');
Route::any('show_user', 'UserController@show_user');


// Route::any('/', 'Auth\AuthController@getLogin');

// Route::any('login','StdController@login');
// Route::any('search','StdController@search');
// Route::any('register','StdController@register');

// Route::any('all_user','StdController@all_user');
// Route::any('delete/{user}','StdController@delete');

// Route::any('edit/{id}','StdController@edit');
// Route::any('add_post','StdController@add_post');
// Route::any('all_post','StdController@all_post');

// // Authentication routes...
// Route::get('auth/login', 'Auth\AuthController@getLogin');
// Route::post('auth/login', 'Auth\AuthController@postLogin');
// Route::get('auth/logout', 'Auth\AuthController@getLogout');

// // Registration routes...
// Route::get('auth/register', 'Auth\AuthController@getRegister');
// Route::post('auth/register', 'Auth\AuthController@postRegister');

// //category
// Route::any('add_cat', 'StdController@add_cat');
// Route::any('show_cat/{cat_name}', 'StdController@show_cat');
