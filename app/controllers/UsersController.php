<?php

class UsersController extends \BaseController {


	protected $user;

	public function __construct(User $user)
	{
		$this->user = $user; 

		// Filter all access to users
		$this->beforeFilter('auth');
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
		$input = Input::all();

		if(! $this->user->isValid($input))
		{	
		 	return Redirect::back()->withInput()->withErrors($this->user->errors);
		}

		// $user = new User;
		// $user->login = Input::get('login');
		// $user->password = Hash::make(Input::get('password'));
		// $user->save();

		// Fill the user 
		$this->user->fill($input);

		// Save it and return to the Index
		$this->user->save();

		return Redirect::route('users.index');

	}





	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($username)
	{
		$user = $this->user->whereUsername($username)->first(); 

		return View::make('users.show',['user' => $user]); 

	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
