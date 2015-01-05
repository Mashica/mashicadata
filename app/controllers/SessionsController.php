<?php

class SessionsController extends \BaseController {


	/**
	 * Validation rules
	 * @var Array
	 */
	private static $rules = [
		'username' => 'required',
		'password' => 'required'
	];



	/**
	 * Store a newly created resource in storage.
	 * POST /sessions
	 *
	 * @return Response
	 */
	public function store()
	{
		// Get form input
		$input = Input::only('username','password');

		// Do validation
		$validation = Validator::make($input, static::$rules);

		// If the validation fails, then redirect back to the form
		if($validation->fails())
		{	
		 	return Redirect::back()->withInput()->withErrors($validation->messages());
		}



		// if we've arrive here, we passed the validation. So, log in.
		if(Auth::attempt($input))
		{
			return Redirect::intended('/');
		}

		// if login fails, then flash the failed login message
		return Redirect::back()->withInput()->withFlashMessage('Nombre de usuario o contraseña equivocada.');
	}


	/**
	 * Remove the specified resource from storage.
	 * DELETE /sessions/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id = null)
	{
		Auth::logout();

		return Redirect::home();
	}

}