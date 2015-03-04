<?php

use OAuth2\OAuth2;
use OAuth2\Token_Access;
use OAuth2\Exception as OAuth2_Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class UsersController extends \BaseController {


	protected $user;

	public function __construct(User $user)
	{
		$this->user = $user; 

		// Filter all access to users
		$this->beforeFilter('auth');
		$this->beforeFilter('canEditUser', ['only' => ['edit', 'update']]); 
		$this->beforeFilter('canCreateUser', ['only' => ['create', 'store', 'destroy']]); 
	}



	public function get_user_info(Token_Access $token)
	{
		$url = 'https://www.strava.com/api/v3/athlete?' . http_build_query(array(
			'access_token' => $token->access_token,
		));

		$user = json_decode(file_get_contents($url));
		//$user = file_get_contents($url);

		// return $user;

		// Create a response from the request
		return array(
			'uid' => $user->id,
			'firstname'=> $user->firstname,
			'lastname'=> $user->lastname,
			'profile_medium' => $user->profile_medium,
			'profile' => $user->profile,
			'sex' => $user->sex,
			'follower_count' => $user->follower_count,
			'friend_count' => $user->friend_count,
			'created_at' => $user->created_at,
			'updated_at' => $user->updated_at,
		);
	}

	public function access_strava($token)
	{

        //$params = $provider->access($_GET['code']);
		if ( ! isset($token))
	    {
	    	return Redirect::route('strava.index');
	    }


    	$token = new Token_Access(array(
                'access_token' => $token
             ));
		$strava_user = $this->get_user_info($token);

 		return ($strava_user);
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

		// Assign "member role to new user."
		$this->user->assignRole(3);

		// Redirect to personal page of the user.
		return Redirect::route('users.show',['username' => $this->user->username]);

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
			$user = $this->user->with('profile')->with('viguera')->whereUsername($username)->firstOrFail();
		}
		catch(ModelNotFoundException $e)
		{
			return Redirect::home();
		}


		$strava_user = $user->profile ? $this->access_strava($user->profile->strava_oauth_token) : "";

		return View::make('users.show',['user' => $user, 'strava_user' => $strava_user]);
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
			$user = $this->user->with('profile')->with('roles')->whereUsername($username)->firstOrFail();
			$userRoles = $user->roles->lists('id');
		}
		catch(ModelNotFoundException $e)
		{
			return Redirect::home();
		}
		return View::make('users.edit',['user' => $user, 'userRoles' => $userRoles]);
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
		$user->save();


		// Update Roles
		if(Auth::user()->hasRole('super') || Auth::user()->id == 1)
		{
			if(isset($input['role'])) 
				$allowed = $input['role'];
			else $allowed = array();
				
			if(!$allowed || !is_array($allowed))
				$allowed = array();

			if(count($allowed) > 0)
				$allowed = Role::select('id')
					->whereIn('id', $allowed)
					->get()
					->lists('id');

			if(count($allowed) > 0)
				$user->roles()->sync($allowed);
			else $user->roles()->detach();
		}


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
