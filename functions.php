<?php

define('FILE_NAME', 'users.php');

function add_the_user($user, $filename = FILE_NAME)
{
	$data = trim($user['name']) . " - " . trim($user['email']) . "\n";
	file_put_contents($filename, $data, FILE_APPEND);
}

function valid_email($email)
{
	return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function old($name)
{
	if (isset($_POST['user'])) {
		$user = $_POST['user'];
		if (isset($user['name']) && $name == 'name') return $user['name'];
		if (isset($user['email']) && $name == 'email') return $user['email'];
	}
	else return '';
}

function get_users($filename = FILE_NAME)
{
	$users = [];
	$raw_users = file($filename);
	foreach ($raw_users as $user) {
		$users[] = explode(' - ', htmlspecialchars($user));
	}
	return $users;
}