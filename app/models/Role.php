<?php

class Role extends \Eloquent {

	protected $fillable = ['name','description'];

	public $timestamps = false;
	
	public $errors;

}