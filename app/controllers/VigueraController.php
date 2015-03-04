<?php

use Illuminate\Database\Eloquent\ModelNotFoundException;


class VigueraController extends \BaseController {


	public function __construct(Viguera $viguera)
	{
		$this->viguera = $viguera;

		// Filter all access to pesos
		$this->beforeFilter('auth');
		$this->beforeFilter('canCreateUser'); 
	}




	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::select('id', DB::raw('CONCAT(name, " ", lastname) AS full_name'))->where('isActive',1)->orderBy('full_name')->lists('full_name', 'id');

		$vigueraId = Input::get('vigueraId');
		$user = ($vigueraId) ? Viguera::find($vigueraId)->user : null;
		$userId = ($user) ? $user->id : null;
		
		return View::make('viguera.create', array('users' => $users, 'user' => $user, 'userId' => $userId));

	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();

		// Validation
		if(! $this->viguera->isValid($input))
		{	
		 	return Redirect::back()->withInput()->withErrors($this->viguera->errors);
		}

		// Prepend the hour to the min:sec time, if needed.
		// $input['tiempo'] = (substr($input['tiempo'], 0, 3) == '00:') ? $input['tiempo'] : '00:' . $input['tiempo'];

		// Fill the db
		$this->viguera->fill($input);

		// Save it and return to the Index
		$this->viguera->save();

		return Redirect::route('viguera.index', array('vigueraId' => $this->viguera->id )); //, 'atletaId' => Input::get('user_id')
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $username
	 * @return Response
	 */
	public function show($username)
	{	
		try
		{
			// $user = $this->user->with('profile')->whereUsername($username)->firstOrFail();
			$user = User::whereUsername($username)->firstOrFail();

		}
		catch(ModelNotFoundException $e)
		{
			return Redirect::home();
		}

		$users = User::select('id', DB::raw('CONCAT(name, " ", lastname) AS full_name'))->where('isActive',1)->orderBy('full_name')->lists('full_name', 'id');
		$userId = ($user) ? $user->id : null;
		
		return View::make('viguera.create', array('users' => $users, 'user' => $user, 'userId' => $userId));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$users = User::select('id', DB::raw('CONCAT(name, " ", lastname) AS full_name'))->where('isActive',1)->orderBy('full_name')->lists('full_name', 'id');
		$viguera = $this->viguera->whereId($id)->first(); 
		$user = Viguera::find($id)->user;

		return View::make('viguera.edit',['viguera' => $viguera, 'user' => $user, 'users' => $users]);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// Get the input
		$input = Input::all();

		// Validate
		if(! $this->viguera->isValid($input, $id))
		{	
		 	return Redirect::back()->withInput()->withErrors($this->viguera->errors);
		}


		// Update
		$viguera = Viguera::find($id); 

		// $viguera->user_id = $input['user_id'];
		// $viguera->fecha = $input['fecha'];
		// $viguera->grasa = $input['grasa'];
		// $viguera->musculo = $input['musculo'];

		// Prepend the hour to the min:sec time, if needed.
		// $input['tiempo'] = (substr($input['tiempo'], 0, 3) == '00:') ? $input['tiempo'] : '00:' . $input['tiempo'];

		// Fill the db
		$viguera->fill($input);
		$viguera->save();

		return Redirect::route('viguera.index', ['vigueraId' => $id]);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{	
		$user = Viguera::find($id)->user;

		Viguera::destroy($id);

		return Redirect::route('viguera.index', ['user' => $user]);
	}


}
