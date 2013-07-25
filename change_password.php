<?php 
include 'core/init.php';			//Import/include 'Initilise' file init.php
protect_page();
if (empty($_POST) == false) {
		$required_fields = array('current_password', 'new_password', 'new_password_confirm');
		foreach($_POST as $key=>$value)	{
			if(empty($value) && in_array($key, $required_fields) == true) {
				$errors[] = 'All fields marked with an asterisk are required';
				break 1;
			}	
		}
	if (md5($_POST['current_password']) == $user_data['password']) {
	
		if (trim($_POST['new_password']) !== trim($_POST['new_password_confirm'])) {
			$errors[] = 'Your new passwords do not match!';
		} else if (strlen($_POST['new_password']) < 6) {
			$errors[] = 'Your new password must contain more than six characters!';
		}
			
	} else {
		$errors[] = 'The password you have entered is incorrect!';
	}
	
}
include '_inc/overall/header.php';	//Import/include 'Header' file header.php
?>
<section class="change_password_form">
	<h1>Change Password</h1>
		<?php if (isset($_GET['success']))  {
				echo 'Your password has been successfully changed!';
				} else {
					if (empty($_POST) === false && empty($errors) === true) {
						change_password($session_user_id, $_POST['new_password']);
						header('Location: change_password.php?success');
					} else if (empty($errors) == false) {
						echo output_errors($errors);  //output errors
				}
		?>	
		<form method="post" action="">
			<ul>
				<li>
					<label for="current_password">Current Password: <span class="required">*</span></label> 
					<br />   
				    <input type="password" id="current_password" name="current_password" value="" placeholder=""  autofocus="autofocus" />  
				</li>
				<li>
					<label for="new_password">New Password: <span class="required">*</span></label> 
					<br />   
				    <input type="password" id="new_password" name="new_password" value="" placeholder=""  autofocus="autofocus" />  
				</li>
				<li>
					<label for="new_password_confirm">Confirm New Password: <span class="required">*</span></label> 
					<br />   
				    <input type="password" id="new_password_confirm" name="new_password_confirm" value="" placeholder=""  autofocus="autofocus" />  
				</li>
				<li>
					<input type="submit" name="" value="Change password" />
				</li>
			</ul>
		</form>
	</section>
<?php 
}
include'_inc/overall/footer.php'; 
?> 	<!--Import/include 'footer' file footer.php -->