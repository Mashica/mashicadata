<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;


	protected $fillable = ['username','email','password','name','lastname','isactive','isinvisible'];

	public $errors;



	/**
	 * Validation Function
	 *
	 * 
	 */
	public static function rules ($id=0, $merge=[])
	{
	    return array_merge(
	        [
				'username' => 'required|alpha_dash|unique:users,username' . ($id ? ",$id" : ''),
				'password' => 'sometimes|required|confirmed',
				'email' => 'required|email|unique:users' . ($id ? ",email,$id" : ''),
				'name' => 'required',
				'lastname' => 'required'
	        ], 
			$merge
		);
	}
	

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');


	/**
	 * Mutator for password hashing
	 * @param string $pass password for Hashing
	 */
	public function setPasswordAttribute($pass)
	{
		$this->attributes['password'] = Hash::make($pass);
	}


	/**
	 * Validation for new user creation
	 * @param  Input Array  $data Form data
	 * @param  id of the user in case of update
	 * @return boolean       passes or fails
	 */
	public function isValid($data, $id=0)
	{
		// $validation = Validator::make($data, static::$rules);
		$validation = Validator::make($data, $this->rules($id));

		if($validation->passes()) return true;

		$this->errors = $validation->messages(); 

		return false;
	}


	/**
	 * Check if current user is the authenticated user
	 * 
	 * 
	 */
	public function isCurrentUser()
	{
		return Auth::user()->id == $this->id;
	}


	/**
	 * Determine whether a user has role or not; by role name, or by role id.
	 * @param $name string of role name
	 * or
	 * @param $id int index value of role id.
	 * @return boolean has or has not.
	 * 
	 */
	public function hasRole($name)
	{
		foreach ($this->roles as $role) {
			if ($role->name == $name) return true;
		}
		return false;
	}
	public function hasRoleId($id)
	{
		foreach ($this->roles as $role) {
			if ($role->id == $id) return true;
		}
		return false;
	}

	/**
	 * Assigns role to user.
	 * @param int Role Id
	 * 
	 */
	public function assignRole($roleId)
	{
		if(! $this->hasRoleId($roleId)) return $this->roles()->attach($roleId);
		else return true;
	}
	public function removeRole($roleId)
	{
		return $this->roles()->detach($roleId);
	}



	/**
	 * Can edit/create users
	 * 
	 */
	public function canEditUser()
	{
		if($this->isCurrentUser() || Auth::user()->hasRole('super') || Auth::user()->hasRole('admin') || Auth::user()->id == 1)
		{
			return true;
		}

		return false;
	}
	public function canCreateUser()
	{
		if(Auth::user()->hasRole('super') || Auth::user()->hasRole('admin') || Auth::user()->id == 1)
		{
			return true;
		}
		
		return false;
	}



	/**
	 * RELATIONSHIPS
	 * 
	 * One to many relationship for pesos
	 * One to one relationship for profile
	 * Many to many relationship for roles
	 * 
	 */
	public function pesos()
	{
		return $this->hasMany('Peso');
	}

	public function profile()
	{
		return $this->hasOne('Profile');
	}

	public function roles()
	{
		return $this->belongsToMany('Role');
	}


}

	