<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;


	//public $timestamps = false;

	protected $fillable = ['username','email','password','name','lastname','isactive','isinvisible'];

	public $errors;



	/**
	 * Validation rules
	 * @var Array
	 */
	public static $rules = [
		'username' => 'required|alpha_dash|unique:users',
		'password' => 'required|confirmed',
		'email' => 'required|email|unique:users',
		'name' => 'required',
		'lastname' => 'required'
	];
	

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
	 * @return boolean       passes or fails
	 */
	public function isValid($data)
	{
		$validation = Validator::make($data, static::$rules);

		if($validation->passes()) return true;

		$this->errors = $validation->messages(); 

		return false;
	}



	/**
	 * RELATIONSHIPS
	 */

	/**
	 * One to many relationship for pesos
	 * 
	 */
	public function pesos()
	{
		return $this->hasMany('Peso');
	}



}

	