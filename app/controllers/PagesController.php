<?php

class PagesController extends \BaseController {




	/**
	 * Home page and login page
	 *
	 * @return Response
	 */
	public function home()
	{
		// if logged in, return the homepage. If not, login.
		if(Auth::check()) 
		{
			$user = Auth::user();
		
			if($user->hasRole('super') || $user->hasRole('admin'))
			{
				$users = User::select('id', 'email', 'username', DB::raw('CONCAT(name, " ", lastname) AS full_name'))->where('isActive',1)->orderBy('full_name')->get();
				return View::make('pages.home', array('users' => $users));
			}

			return Redirect::to('/'.$user->username); 
		}

		return View::make('pages.cover');
			

	}


}
