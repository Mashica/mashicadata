<?php


class Peso extends \Eloquent {
	
	protected $fillable = ['user_id','fecha','peso','grasa','musculo'];

	public $errors;




	/**
	 * Validation rules
	 * @var Array
	 */
	public static $rules = [
		'user_id' => 'required',
		'fecha' => 'required|date',
		'peso' => 'required|numeric',
		'grasa' => 'numeric',
		'musculo' => 'numeric'
	];
	
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'pesos';


	/**
	 * One to many relationship for users
	 * 
	 */
	public function user()
	{
		return $this->belongsTo('User'); 
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


}