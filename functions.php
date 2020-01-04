<?php

function add_the_user($user, $filename = 'users.php')
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