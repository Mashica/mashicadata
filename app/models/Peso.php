<?php


class Peso extends \Eloquent {
	
	protected $fillable = ['user_id','fecha','peso','grasa','musculo'];

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
				'user_id' => 'required',
				'fecha' => 'required|date',
				'peso' => 'required|numeric',
				'grasa' => 'numeric',
				'musculo' => 'numeric'
	        ], 
			$merge
		);
	}


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
	public function isValid($data, $id=0)
	{
		$validation = Validator::make($data, $this->rules($id));

		if($validation->passes()) return true;

		$this->errors = $validation->messages(); 

		return false;


	}


}