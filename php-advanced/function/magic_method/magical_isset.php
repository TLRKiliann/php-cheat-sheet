<?php

// Magic method

class User
{
	protected $data = [
		'email'=>'contact@devpeel.com'
	];

	public function __isset($key)
	{
		return isset($this->data[$key]);
	}
}

$user = new User();

var_dump(isset($user->email));
//bool true
?>