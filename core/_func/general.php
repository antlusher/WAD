<?php
function email($to, $subject, $body) { // simple email function that can be called for account activation or password recovery etc
	mail($to, $subject, $body, 'From: hello@testphp.org');
}



function logged_in_redirect() { //once logged in, the user is directed to the home page, this could be changed to user profile
	if (logged_in() == true) {
		header('Location: index.php'); 
		exit();
		
	}
}

function protect_page() {// protects pages from users that are not logged in
	if (logged_in() == false) {
		header('Location: protected.php');
		exit();
	}
}

function array_sanitize(&$item) { //protects against Injection etc 
	$item = mysql_real_escape_string($item);
}

function sanitize($data) { // as above
	return mysql_real_escape_string($data);	
}

function output_errors($errors) { // creates a list for errors to be displayed
	return '<ul><li>' . implode('</li><li>', $errors) . '</li></ul>';	
}
?>