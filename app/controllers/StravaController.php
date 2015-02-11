<?php
	
use OAuth2\OAuth2;
use OAuth2\Token_Access;
use OAuth2\Exception as OAuth2_Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class StravaController extends \BaseController {


	public function __construct() 
	{
		// Filter all access to users
		//$this->beforeFilter('auth');
	}


	public function get_user_info(Token_Access $token)
	{
		$url = 'https://www.strava.com/api/v3/athlete?' . http_build_query(array(
			'access_token' => $token->access_token,
		));

		$user = json_decode(file_get_contents($url), true);

		return $user;

		// Create a response from the request
		// return array(
		// 	'uid' => $user->id,
		// 	'nickname' => (property_exists($user, 'username') ? $user->username : null),
		// 	'first_name'=> (property_exists($user, 'first_name') ? $user->first_name : null),
		// 	'last_name'=> (property_exists($user, 'last_name') ? $user->last_name : null),
		// 	'name' => $user->name,
		// 	'email' => (property_exists($user, 'email') ? $user->email : null),
		// 	'location' => !empty($user->hometown->name) ? $user->hometown->name : null,
		// 	'gender' => $user->gender,
		// 	'timezone' => $user->timezone,
		// 	'verified' => $user->verified,
		// 	'image' => 'https://graph.facebook.com/me/picture?type=normal&access_token='.$token->access_token,
		// 	'urls' => array(
		// 	  'Facebook' => $user->link,
		// 	),
		// );
	}



	public function get_token($provider)
	{
	    $provider = OAuth2::provider($provider, array(
	        'id' => $_ENV['STRAVA_IDENTIFIER'],
	        'secret' => $_ENV['STRAVA_SECRET'],
	        'scope' => 'write',
	    ));

	    if ( ! isset($_GET['code']))
	    {
	        // By sending no options it'll come back here
	        return $provider->authorize();
	    }
	    else
	    {
	        // Howzit?
	        try
	        {
	            $params = $provider->access($_GET['code']);

	        		// $token = new Token_Access(array(
	          //           'access_token' => $params->access_token
	          //       ));

	          //       // $user = $provider->get_user_info($token);
	          //   	$strava_user = $this->get_user_info($token);

	            // Here you should use this information to A) look for a user B) help a new user sign up with existing data.
	            // If you store it all in a cookie and redirect to a registration page this is crazy-simple.
	            //echo "<pre>";
	            //var_dump($user);

				try
				{
					$user = User::with('profile')->whereUsername(Auth::user()->username)->firstOrFail();
				}
				catch(ModelNotFoundException $e)
				{
					return Redirect::home();
				}

				// update user profile data with Token
				// Get profile id
				$profile_id = $user->profile ? $user->profile->id : null; 

				// $user->profile->fill($input['profile'])->save();
				$profile = Profile::firstOrNew(['id' => $profile_id]);

// 
				$profile->strava_oauth_token = $params->access_token;

				$profile = $user->profile()->save($profile);

						// $user->profile->strava_oauth_token = $params->access_token;
						// $user->save(); 

				//return View::make('users.show',['username' => $user]); 
				return Redirect::route('users.show',['username' => $user->username]); 


	        }

	        catch (OAuth2_Exception $e)
	        {
	            show_error('That didnt work: '.$e);
	        }
	    }
	}





	/**
	 * Display a listing of the resource.
	 * GET /strava
	 *
	 * @return Response
	 */
	public function index()
	{
		return $this->get_token('strava');

		// return View::make('strava.index');
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

		return View::make('strava.token',['code' => $code['code']]);
	

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