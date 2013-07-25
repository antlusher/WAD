<?php 
ob_start();
include 'core/init.php';			//Import/include 'Initilise' file init.php
logged_in_redirect();				//redirect logged in user to index page. function called from general.php
include '_inc/overall/header.php';	//Import/include 'Header' file header.php
if (empty($_POST) == false) {
	$required_fields = array('first_name', 'last_name', 'user_name', 'email', 'password_check', 'password');
	foreach($_POST as $key=>$value)	{
		if(empty($value) && in_array($key, $required_fields) == true) {
			$errors[] = 'All fields marked with an asterisk are required';
			break 1;
		}	
	}
	if (empty($errors) == true) {
	
		if (user_exists($_POST['user_name']) == true) {
			$errors[] = 'Sorry, the username \''. $_POST['user_name'] . '\' has been taken. Please try another one.';
		}
		
		if (strlen($_POST['password']) < 6) {
			$errors[] = 'Your password must be at least six characters';			
		}
		
		if ($_POST['password'] !== $_POST['password_check']) {
			$errors[] = 'Your passwords do not match';			
		
		}
		
		if (email_exists($_POST['email']) == true) {
			$errors[] = 'Sorry, the email address \''. $_POST['email'] . '\' has already been registered. Please try another one.';
		}
		
			
	}
		
}
?>
<h1>Register</h1>
<?php
if (isset($_GET['success']) == true && empty($_GET['success']) == false) {
	echo 'You\'ve been successfully registered! Please check the email address you used to activate your account.';
} else {
	if (empty($_POST) === false && empty($errors) === true) {
		$register_data = array(
			'user_name'	=> $_POST['user_name'],
			'first_name'=> $_POST['first_name'],
			'last_name' => $_POST['last_name'],
			'email' 	=> $_POST['email'],
			'password'	=> $_POST['password'],
			'email_code'=> md5($_POST['user_name'] + microtime)
		);
					header('Location: register.php?success'); //redirect user to success output
					exit();
		}	else if (empty($errors) == false) {
			echo output_errors($errors); // reg output errors
}
}
?> 
<form action="" method="post">
	<ul>
		<li>
			<label for="user_name">Username: <span class="required">*</span></label> 
			<br />   
		    <input type="text" id="user_name" name="user_name" value="" placeholder=""  autofocus="autofocus" />  
		</li>
		<li>
			<label for="first_name">First Name: <span class="required">*</span></label>			
			<br />   
			<input type="text" id="first_name" name="first_name" value="" placeholder=""  autofocus="autofocus" />  		
		</li>
		<li>
			<label for="last_name">Surname: <span class="required">*</span></label> 
			<br />   
		    <input type="text" id="last_name" name="last_name" value="" placeholder=""  autofocus="autofocus" />  
		</li>
		<li>
			<label for="email">Your Email: <span class="required">*</span></label>
			<br />   
			<input type="text" id="email" name="email" value="" placeholder="Johndoe@email.com"  autofocus="autofocus" />  
		</li>
		<li>
			<label for="password">New Password: <span class="">*</span></label>
			<br />   
			<input type="password" id="password" name="password" value="" placeholder="min 6 letters and a number"  autofocus="autofocus" />  
		</li>
		<li>
			<label for="password_check">Re-enter Password: <span class="">*</span></label>
			<br />   
			<input type="password" id="password_check" name="password_check" value="" placeholder="min 6 letters and a number"  autofocus="autofocus" />  
		</li>
				 <li>
		 	<input type="submit" value="Register" />
		  </li>
	</ul>
</form>
<?php include'_inc/overall/footer.php'; ?> 	