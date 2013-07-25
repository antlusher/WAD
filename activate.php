<?php 
include 'core/init.php';			//Import/include 'Initilise' file init.php
logged_in_redirect();
include '_inc/overall/header.php';	//Import/include 'Header' file header.php
if (isset($_GET['success']) == true && empty($_GET['success']) == true) {
?>
<h2>Your account has now been activated!</h2>
<p>Please sign in</p>
<?php 
}	else if (isset($_GET['email'], $_GET['email_code']) == true) { // checks for both user email and email code

	$email 		= trim($_GET['email']); // strip out white space
	$email_code = trim($_GET['email_code']);
	
		if (email_exists($email) == false) {// call email_exists from users.php and check if its wrong
		$errors[] = 'Oops! Something went wrong and we can\'t find your email address';
			} elseif (activate_account($email, $email_code) == false) {// call 'activate_account' from user.php and set $email, $email_code varables for DB query
		$errors[] = 'We\'ve had issues activating your account! Please contact use through the Help page.';
		}
	
	if (empty($errors) == false) {
	?>
<h2>Oops..</h2>
	<?php 
		echo output_errors($errors); // more error handling
	}	else {
		header('Location: activate.php?success');
		exit();
	}	
		
}	else {
	header('Location: index.php'); // protect file and redirect
	exit();
}
include'_inc/overall/footer.php'; 
?> 	<!--Import/include 'footer' file footer.php --> 