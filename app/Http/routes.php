<?php

Route::any('/', 'UserController@index');
Route::any('insert', 'UserController@insert');

Route::any('hosue', 'UserController@index');
Route::any('do_reg', 'UserController@do_reg');
Route::any('show_user', 'UserController@show_user');
Route::any('/delete/{id}', 'UserController@delete');
Route::any('/edit/{id}', 'UserController@edit');
Route::any('/update/{id}', 'UserController@update');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::any('home', 'HomeController@home');