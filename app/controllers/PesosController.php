<?php

class PesosController extends \BaseController {


	public function __construct(Peso $peso)
	{
		$this->peso = $peso;

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
		$users = User::select('id', DB::raw('CONCAT(name, " ", lastname) AS full_name'))->where('isActive',1)->orderBy('full_name')->lists('full_name', 'id');
		
		$pesoId = Input::get('pesoId');
		$user = ($pesoId) ? Peso::find($pesoId)->user : null;
		$userId = ($user) ? $user->id : null;
		
		return View::make('peso.create', array('users' => $users, 'user' => $user, 'userId' => $userId));

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
		if(! $this->peso->isValid($input))
		{	
		 	return Redirect::back()->withInput()->withErrors($this->peso->errors);
		}

		// Fill the db
		$this->peso->fill($input);

		// Save it and return to the Index
		$this->peso->save();

		return Redirect::route('peso.index', array('pesoId' => $this->peso->id )); //, 'atletaId' => Input::get('user_id')
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
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
		$peso = $this->peso->whereId($id)->first(); 
		$user = Peso::find($id)->user;

		return View::make('peso.edit',['peso' => $peso, 'user' => $user, 'users' => $users]);
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
		// if(! $this->peso->isValid($input, $id))
		// {	
		//  	return Redirect::back()->withInput()->withErrors($this->peso->errors);
		// }


		// Update
		$peso = Peso::find($id); 

		$peso->user_id = $input['user_id'];
		$peso->fecha = $input['fecha'];
		$peso->peso = $input['peso'];
		$peso->grasa = $input['grasa'];
		$peso->musculo = $input['musculo'];

		$peso->save();

		return Redirect::route('peso.index', ['pesoId' => $id]);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{	
		$user = Peso::find($id)->user;
		Peso::destroy($id);

		return Redirect::route('peso.index', ['user' => $user]);
	}


}
