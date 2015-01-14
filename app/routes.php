<?php



# Home
Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home']);


# Authentication
Route::get('login', ['as' => 'login', 'uses' => 'PagesController@home'] );
Route::get('logout', ['as' => 'logout', 'uses' => 'SessionsController@destroy']);
Route::resource('sessions','SessionsController', ['only' => ['store','destroy']]);

# Password Reminder
Route::controller('password', 'RemindersController');


# Users
Route::resource('users', 'UsersController');

# Pesos
Route::resource('peso', 'PesosController', ['except' => 'create']);

