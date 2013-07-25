<?php ///////////////////////////////// PLEASE SEE REGISTER.PHP AS CODE IS VERY SIMILAR//////////////////////////////////
include 'core/init.php';			
protect_page();
include '_inc/overall/header.php';	
if (empty($_POST) == false) {
	$required_fields = array('first_name', 'email');
	foreach($_POST as $key=>$value)	{
		if(empty($value) && in_array($key, $required_fields) == true) {
			$errors[] = 'All fields marked with an asterisk are required';
			break 1;
		}	
	}
	
	if (empty($errors) == true) {
		if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == false) { // checks for @. charaters
			$errors[] = 'A valid email address is required';
			
		}	elseif (email_exists($_POST['email']) == true && $user_data['email'] !== $_POST['email']) { // calls 'email_exists' and 'user_datas "email" stored value for DB to compare against POSTed values
			$errors[] = 'Sorry, the email address \''. $_POST['email'] . '\' is already in use. Please try another one.';
		}
		
	}
		
}
?>
<div class="main_content">
<h1>Profile Settings</h1>
<?php 
if (isset($_GET['success']) == true && empty($_GET['success']) == true) {
	echo 'Your details have been updated!';
} else {
		if (empty($_POST) == false && empty($errors) == true) {
			$update_data = array(
				'first_name'		=> $_POST['first_name'],
				'last_name' 		=> $_POST['last_name'],
				'email' 			=> $_POST['email'],
				'user_description' 	=> $_POST['user_description']
			);
			update_user($session_user_id, $update_data);
			header('Location:settings.php?success');
			exit();
		}	else if (empty($errors) == false) {
				echo output_errors($errors);
		}		
?>
		<form method="post" action="">
			<ul>
				<li>
					<label for="first_name">First Name : </label>			
					<br />   
					<input type="text" id="first_name" name="first_name" value="<?php echo $user_data['first_name']; ?>"  />  		
				</li>
				<li>
					<label for="last_name">Surname: </label> 
					<br />   
				    <input type="text" id="last_name" name="last_name" value="<?php echo $user_data['last_name']; ?>"  />  
				</li>
				<li>
					<label for="email">Your Email: </label>
					<br />   
					<input type="text" id="email" name="email" value="<?php echo $user_data['email']; ?>"  />  
				</li>
				<li>
					<label for="email">Go ahead and tell the World who you are!: </label>
					<br />   
					<textarea  style="resize: none;" cols="60" rows="10" name="user_description"></textarea>
				</li>
				<li>
					<input type="submit" name="Update" value="Update" />
				</li>
			</ul>
		</form>
      </div>      
<?php include'_inc/overall/footer.php'; ?>
<?php  }// end if statement. if condition is NOT satisfied, then output errors and show user input form?> 	