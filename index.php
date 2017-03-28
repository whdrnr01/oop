<?php
// require 'Models/User.php';
use Todo\Models\Task;
use Todo\Models\User;

require_once 'vendor/autoload.php';

$task = new Task;
$user = new User;

var_dump($user);
// $user = new User;
// var_dump($user->username);