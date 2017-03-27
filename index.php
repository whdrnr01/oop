<?php

class User {
	public $username = 'cookie';

	public function fullName()
	{
		return 'Chris cookie jeong';
	}

	public function avatar( $size = 60 )
	{
		return $size;
	}
}

$user = new User;

echo $user->avatar(100);