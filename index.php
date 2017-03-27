<?php

class User {
	protected $email;

	public function setEmail($email)
	{
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			return;
		}

		$this->email = $email;
	}

	public function getEmail()
	{
		return strtolower($this->email);
	}
}

$user = new User;
$user->setEmail('COOKIE@sample.com');

var_dump($user->getEmail());