<?php

# Home
Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home']);


# Authentication
Route::get('login', ['as' => 'login', 'uses' => 'PagesController@home'] );
Route::get('logout', ['as' => 'logout', 'uses' => 'SessionsController@destroy']);
Route::resource('sessions','SessionsController', ['only' => ['store','destroy']]);

# Password Reminder
Route::controller('password', 'RemindersController');



# Strava
Route::get('strava', ['as' => 'strava.index', 'uses' => 'StravaController@index']);
//Route::get('strava/token_exchange', ['as' => 'strava.token', 'uses' => 'StravaController@token']);


# Viguera
Route::resource('viguera', 'VigueraController', ['except' => 'create']);

# Pesos
Route::resource('peso', 'PesosController', ['except' => 'create']);

# Users
Route::resource('users', 'UsersController');
# User Password Update 
Route::get('/users/{users}/password', ['as' => 'users.password.edit', 'uses' => 'UsersController@passwordEdit']);
Route::post('/users/{users}/password', ['as' => 'users.password.update', 'uses' => 'UsersController@passwordUpdate']);
# User direct (w/o "user")
Route::get('/{users}', 'UsersController@show');





Route::get('test', function(){
	// $role = Role::whereName('admin')->first();
	// User::find(1)->assignRole($role->id);
	// User::find(1)->removeRole(Role::whereName('admin')->first()->id);

	//$user = User::with('roles')->with('profile')->find(2);
	// $users = User::with('roles')->get();

	// foreach ($users as $user) {
	// 	$user->assignRole(3);
	// }
	// //return User::with('roles')->with('profile')->find(1)->roles->first()->name;
	// // if($user->hasRole('super') || $user->hasRole('admin')) return "Administrator";
	// // else return "Member";
	// return $users;
});


