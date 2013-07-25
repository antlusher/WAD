<?php 
include 'core/init.php';			//Import/include 'Initilise' file init.php
logged_in_redirect();						//user login check function called from general.php
include '_inc/overall/header.php';	//Import/include 'Header' file header.php
?>
<?php 
if (isset($_GET['success']) == true && empty($_GET['success']) == true) {
?>
	<p>Thank you. We have now sent you an email to the provided address. Please follow the instructions within the email.</p>
<?php	
	} else {
		$mode_allowed = array('user_name', 'password');
		if (isset($_GET['mode']) == true && in_array($_GET['mode'], $mode_allowed) == true) {
			if (isset($_POST['email']) == true && empty($_POST['email']) == false) {
				if (email_exists($_POST['email']) == true) {
					recover($_GET['mode'], $_POST['email']);
					header('Location: recover.php?success');
					exit();
				} else {
					echo '<p>Oops! Sorry, we could not find your email address. Please try another one.</p>';
				}
				
			}
		?>
			<form method="post" action="">
				<ul>
					<li>
						Please enter your email address: <br />
						<input type="text" name="email" />
					</li>
					<li>
						<input type="submit" value="Recover" />
					</li>
				</ul>
			</form>
		<?php
		} else {
			header('Location: index.php');
			exit();
	}
}
?>
<?php include'_inc/overall/footer.php'; ?>