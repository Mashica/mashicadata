<?php

use Illuminate\Database\Eloquent\ModelNotFoundException;


class UsersController extends \BaseController {


	protected $user;

	public function __construct(User $user)
	{
		$this->user = $user; 

		// Filter all access to users
		$this->beforeFilter('auth');
		$this->beforeFilter('currentUser', ['only' => ['edit', 'update']]); 
	}




	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// $users = $this->user->all();
		$users = $this->user->orderBy('name')->get();

		return View::make('users.index', ['users' => $users]); 
	}



	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('users.create');
	}



	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// Get input
		$input = Input::all();

		if(! $this->user->isValid($input))
		{	
		 	return Redirect::back()->withInput()->withErrors($this->user->errors);
		}


		// Fill the user 
		$this->user->fill($input);

		// Save it and return to the Index
		$this->user->save();

		return Redirect::route('users.index');

	}





	/**
	 * Display the specified resource.
	 *
	 * @param  string  $username
	 * @return Response
	 */
	public function show($username)
	{
		try
		{
			$user = $this->user->with('profile')->whereUsername($username)->firstOrFail();
			//dd($user->toArray());
		}
		catch(ModelNotFoundException $e)
		{
			return Redirect::home();
		}

		return View::make('users.show',['user' => $user]); 
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($username)
	{
		try
		{
			$user = $this->user->with('profile')->whereUsername($username)->firstOrFail();

		}
		catch(ModelNotFoundException $e)
		{
			return Redirect::home();
		}
		return View::make('users.edit',['user' => $user]);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  string  $username
	 * @return Response
	 */
	public function update($username)
	{
		// Get the input
		$input = Input::all();

		// Get the user
		$user = User::whereUsername($username)->firstOrFail();

		// Validate
		if(! $this->user->isValid($input, $user->id))
		{	
		 	return Redirect::back()->withInput()->withErrors($this->user->errors);
		}


		// Update User table
		$user->fill($input);
		$user->isactive = Input::get('isactive');
		$user->isinvisible = Input::get('isinvisible');
		$user->save();

		// Get profile id
		$profile_id = $user->profile ? $user->profile->id : null; 

		// $user->profile->fill($input['profile'])->save();
		$profile = Profile::firstOrNew(['id' => $profile_id]);
		$profile->fill($input['profile']);
		$profile = $user->profile()->save($profile);


		//return View::make('users.show',['username' => $user]); 
		return Redirect::route('users.show',['username' => $user->username]); 
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		User::destroy($id);

		return Redirect::route('users.index');
	}






	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  string  $username
	 * @return Response
	 */
	public function PasswordEdit($username)
	{
		$user = $this->user->whereUsername($username)->first(); 

		return View::make('users.password.edit',['user' => $user]);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function passwordUpdate($id)
	{
		// Get the input
		$input = Input::all();

		// Get the User
		$user = User::find($id); 

		$validator = Validator::make($input,
			array(
				'current_password'		=> 'required',
				'password'				=> 'required|confirmed'
			)
		);

		if($validator->fails()) 
		{

			return Redirect::back()->withErrors($validator);

		}
		elseif(Hash::check(Input::get('current_password'), $user->password))
		{

			// Get passwords from the user's input
			//$password = Input::get('password');
			$user->password = $input['password'];
			$user->save();

			return Redirect::route('users.show', ['username' => $user->username]);

		}
		else
		{
			return Redirect::back()->withErrors($messages = array(
			    'passwordupdate' => 'The current password is incorrect.'
				));

		}

	}




}
