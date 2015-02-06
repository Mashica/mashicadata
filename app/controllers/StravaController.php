<?php

class StravaController extends \BaseController {


	public function __construct() 
	{
		// Filter all access to users
		//$this->beforeFilter('auth');
	}



	/**
	 * Display a listing of the resource.
	 * GET /strava
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('strava.index');
	}


	/**
	 * Callback address for receiving strava OAth
	 * 
	 *
	 * @return Response
	 */
	public function token()
	{
		$code = Input::only('code');

		return View::make('strava.token',['code' => $code]);
	

	}








	/**
	 * Show the form for creating a new resource.
	 * GET /strava/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /strava
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /strava/{id}
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
	 * GET /strava/{id}/edit
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
	 * PUT /strava/{id}
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
	 * DELETE /strava/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}