<?php
function recover($mode, $email) {
	$mode 		= sanitize($mode);
	$email	 	= sanitize($email);
	
	$user_data = user_data(user_id_from_email($email), 'user_id', 'first_name', 'user_name');
	if ($mode == 'user_name') {
		email($email, 'Sports Pal username request!', "Hello " . $user_data['first_name'] . ", \n\nYour username is: " . $user_data['user_name'] . "\n\n Best regards Sports Pal.");
	} elseif ($mode == 'password') {
		$generated_password = substr(md5(rand(999, 999999)), 0, 8);
		change_password($user_data['user_id'], $generated_password);
		
		email($email, 'Sports Pal Password Request!', "Hello " . $user_data['first_name'] . ", \n\nYour password is: " . $generated_password . "\n\n Best regards Sports Pal.");
		
	}
}

function user_profile_image($user_id, $file_temp, $file_ext) {
	$file_path_name = 'images/profiles/' . substr(md5(time()), 0, 10) . '.' . $file_ext;
	move_uploaded_file($file_temp, $file_path_name);
	mysql_query("UPDATE `user` SET `profile` = '" . $file_path_name . "' WHERE `user_id` = " . (int)$user_id );
	
}

function update_user($user_id, $update_data) {
	$update = array();
	array_walk($update_data, 'array_sanitize'); 
	
	foreach ($update_data as $field => $data) {
		$update[] = '`' . $field . '` = \'' . $data . '\'';
		
	}
		
	mysql_query("UPDATE `user` SET " . implode(', ', $update) . " WHERE `user_id` = $user_id");
}



function activate_account($email, $email_code) {
	$email 		= mysql_real_escape_string($email);
	$email_code = mysql_real_escape_string($email_code);;
	
	if (mysql_result(mysql_query("SELECT COUNT(`user_id`) FROM `user` WHERE `email` = '$email' AND `email_code` = '$email_code' AND `active` = 0"), 0) == 1) {
		mysql_query("UPDATE `user` SET `active` = 1 WHERE `email` = '$email'");
		return true;
		
	} else {
		return false;
	}
	
}

function change_password($user_id, $new_password) {
	$user_id = (int)$user_id;
	$new_password = md5($new_password);
	mysql_query("UPDATE `user` SET `password` = '$new_password' WHERE `user_id` = $user_id");
}


function register_user($register_data) {
	array_walk($register_data, 'array_sanitize'); 
	$register_data['password'] = md5($register_data['password']);
	
	
	$fields = '`' . implode('`, `', array_keys($register_data)) . '`';
	$data = '\'' . implode('\', \'', $register_data) . '\'';
		
	mysql_query("INSERT INTO `user` ($fields) VALUES ($data)");
	
	email($register_data['email'], 'Sports Pal Account Activation', "
	Hello " . $register_data['first_name'] . ",
	\n\n
	Please use the link below to activate your account:
	\n\n
    http://localhost:8888/WAD/activate.php?email=" . $register_data['email']. "&email_code=" . $register_data['email_code'] . "
	\n\n
	We look forward to seeing you!
	
	Sports Pal.
				");
}

function user_count() {
	return mysql_result(mysql_query("SELECT COUNT(`user_id`) FROM `user` WHERE `active` = 1"), 0);
}

function user_data($user_id) {
	$data = array();
	$user_id = (int)$user_id;
	
	$func_num_args = func_num_args();
	$func_get_args = func_get_args();
	
	if ($func_num_args > 1)	{
		unset($func_get_args[0]);
		
		$fields = '`' . implode('`, `', $func_get_args) . '`';
		$data = mysql_fetch_assoc(mysql_query("SELECT $fields FROM `user`
		LEFT JOIN sport_activity ON sport_activity_sport_id = sport_activity.sport_id
		WHERE `user_id` = $user_id"));
		return	$data;
	}
		
}
 
function logged_in() {
	return (isset($_SESSION['user_id'])) ? true : false;
}


function user_exists($username) {
	$username = sanitize($username);
	return (mysql_result(mysql_query("SELECT COUNT(`user_id`) FROM `user` WHERE `user_name` = '$username'"), 0) == 1) ? true : false;	
}

function email_exists($email) {
	$email = sanitize($email);
	return (mysql_result(mysql_query("SELECT COUNT(`user_id`) FROM `user` WHERE `email` = '$email'"), 0) == 1) ? true : false;	
}


function user_active($username) {
	$username = sanitize($username);
	return (mysql_result(mysql_query("SELECT COUNT(`user_id`) FROM `user` WHERE `user_name` = '$username' AND `active` = 1"), 0) == 1) ? true : false;	
}


function user_id_from_username($username) {
	$username = sanitize($username);
	return mysql_result (mysql_query("SELECT `user_id` FROM `user` WHERE `user_name` = '$username'"), 0, 'user_id');
}

function user_id_from_email($email) {
	$email = sanitize($email);
	return mysql_result (mysql_query("SELECT `user_id` FROM `user` WHERE `email` = '$email'"), 0, 'user_id');
}

function login($username, $password) {
	$user_id = user_id_from_username($username);
	$username = sanitize($username);
	$password = md5($password);
	
	return (mysql_result(mysql_query("SELECT COUNT(`user_id`) FROM `user` WHERE `user_name` = '$username' AND `password` = '$password'"), 0) == 1) ? $user_id : false;
}

?>