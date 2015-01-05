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
		$atletaId = Input::get('atletaId');
		$historial = null;
		if($atletaId != null) $historial = User::find($atletaId)->pesos()->orderBy('fecha','desc')->get(); //->take(20)

		return View::make('peso.create', array('users' => $users, 'pesoId' => $pesoId, 'historial' => $historial, 'atletaId' => $atletaId));

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

		return Redirect::route('peso.index', array('pesoId' => $this->peso->id, 'atletaId' => Input::get('user_id') ));
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
