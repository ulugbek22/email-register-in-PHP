<?php

require 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['user'])) {
	$user = $_POST['user'];
	if ( empty($user['name']) || empty($user['email']) || !valid_email($user['email'])) {
		$msg['text'] = 'Name and email must be valid.';
		$msg['class'] = 'error';
	} else {
		add_the_user($user);
		$msg['text'] = 'You are successfully subscribed to our mailing list!';
		$msg['class'] = 'success';
	}
}

require 'index.tmp.php';