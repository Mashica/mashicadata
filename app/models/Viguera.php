<?php


class Viguera extends \Eloquent {
	
	protected $fillable = ['user_id','fecha','ordinal','fc','tiempo'];

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
				'ordinal' => 'required|numeric',
				'fc' => 'required|numeric',
				'tiempo' => array('regex:/^([01]?[0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9]|60)$/')
	        ], 
			$merge
		);
	}

// 'tiempo' => array('regex:/^([0-5][0-9]):([0-5][0-9]|60)$/')
//'tiempo' => array('regex:/^([01]?[0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9]|60)$/')

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'viguera';


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