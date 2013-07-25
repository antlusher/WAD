<?php
session_start();
define('LOGGED_IN', true);
require 'database/connect.php';
require '_func/general.php';
require '_func/users.php';
if (logged_in() == true) {
	$session_user_id = $_SESSION['user_id'];
	$user_data = user_data($session_user_id, 'user_id', 'user_name', 'password', 'first_name', 'last_name', 'email', 'profile');
	if (user_active($user_data['user_name']) == false) {
		session_destroy();
		header('Location: index.php');
		exit();
	}
}
$errors = array();
?>