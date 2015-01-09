<?php
// Another elegant way...

// In your model, create a static function:

public static function rules ($id=0, $merge=[]) {
    return array_merge(
        [
            'username'  => 'required|min:3|max:12|unique:users,username' . ($id ? ",$id" : ''),
            'email'     => 'required|email|unique:member'. ($id ? ",id,$id" : ''),
            'firstname' => 'required|min:2',
            'lastname'  => 'required|min:2',
            ...
        ], 
        $merge);
}

// Validation on create:
$validator = Validator::make($input, User::rules());


// Validation on update:
$validator = Validator::make($input, User::rules($id));

// Validation on update, with some additional rules:
$extend_rules = [
    'password'       => 'required|min:6|same:password_again',
    'password_again' => 'required'
];

$validator = Validator::make($input, User::rules($id, $extend_rules));

// Nice.