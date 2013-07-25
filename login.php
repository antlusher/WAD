<?php
include 'core/init.php';		// Import/include 'Initilise' file init.php
logged_in_redirect();				//redirect logged in user to index page. function called from general.php
if (empty($_POST) == false) { 			// Check for data
	$username = $_POST['user_name'];	// Create variables for comparisons
	$password = $_POST['password'];
		if (empty($username) == true || empty($password) == true){		 //check to if both username and password has been suppled
			$errors[] = 'Please enter your username and password';	 
	}	elseif (user_exists($username) == false) {					
			$errors[] = 'We can not find your username?! Have you registered?';
	}	elseif (user_active($username) == false) {
			$errors[] = 'You need to activate your account!';
	}	else {
	
		$login = login($username, $password);
		if ($login == false) {
			$errors[] = 'The username or password is incorrect';
		} else {
			 $_SESSION['user_id'] = $login;		// IF creds correct, start session and direct user to index.php
			 header('Location: ./index.php');
			 exit();
		}
	}
}
include '_inc/overall/header.php';
if (empty($errors) == false) {		//IF $errors array contains data then....
?>
<div class="main_content">	<h2>We tried to log you in but...</h2>  <!--Break out of PHP and output HTML message-->
<?php	
	echo output_errors($errors); // Output error message to user
}
?>
</div>
<?php include '_inc/overall/footer.php';?>