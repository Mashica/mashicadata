<?php

class Profile extends \Eloquent {


	protected $fillable = ['user_id','bio','tel','cel','address','colonia','city','state','cp','country','birthday'];

	public $errors;



	public function user()
	{
		return $this->belongsTo('User');
	}


}