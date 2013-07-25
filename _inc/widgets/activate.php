<?php 
include 'core/init.php';			//Import/include 'Initilise' file init.php
logged_in_redirect();
include '_inc/overall/header.php';	//Import/include 'Header' file header.php
if (isset($_GET['success']) == true && empty($_GET['success']) == true) {
?>
<div class="main_content">
		<h2>You account have now been activated! </h2>
<?php 
}	else if (isset($_GET['email'], $_GET['email_code']) == true) {
	$email 		= trim($_GET['email']);
	$email_code = trim($_GET['email_code']);
	if (email_exists($email) == false) {
		$errors[] = 'Opps! Something went wrong and we can\'t find your email address';
	} elseif (activate_account($email, $email_code) == false) {
		$errors[] = 'We\'ve had issues activating your account! Please contact use through the Help page.';
	}
	if (empty($errors) == false) {
	?>
		<h2>Oops..</h2>
	<?php 
		echo output_errors($errors);
	}	else {
		header('Location: activate.php?success');
		exit();
	}	
		
}	else {
	header('Location: index.php');
	exit();
}
?>
</div>
<?php
include'_inc/overall/footer.php'; 
?> 	<!--Import/include 'footer' file footer.php --> 