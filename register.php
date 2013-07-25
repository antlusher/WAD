<?php 
include 'core/init.php';
include '_inc/overall/header.php';
if (empty($_POST) == false) {
	$required_fields = array('user_name', 'password', 'password_check', 'last_name', 'email', 'sport_activity'); // set required fields to an array
	foreach ($_POST as $key => $value) { //assign array key to value
		if (empty($value) && in_array($key, $required_fields) == true) {// loop to see if any data has been entered
			$errors[] = 'Fields marked are required!';
			break 1; // brake out of condition and start again
		}
	}
	if (empty($errors) == true) { 
		if (user_exists($_POST['user_name']) == true) {//check against DB using the 'user_exist' function called from user.php
			$errors[] = 'Sorry, the username \'' . $_POST['user_name'] . '\' is already taken.'; 
		}
		if (preg_match("/\\s/", $_POST['user_name']) == true) {// checks for any spacing.. Could cause DB issues
			$errors[] = 'Sorry, your username must not contain any spaces!'; 
		}
		if (strlen($_POST['password']) < 6) {// check the length of the password
			$errors[] = 'Sorry, must contain at least 6 characters!'; 
		}
		if ($_POST['password'] !== $_POST['password_check']) { //check password match
			$errors[] = 'Sorry, both passwords must be the same!'; 
		}
		if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == false) { //checks if email contains the correct charaters e.g @ and .
			$errors[] = 'Sorry, a valid email address is required!'; 
		}
		if (email_exists($_POST['email']) == true) { //check against DB using the 'email_exist' function called from user.php
			$errors[] = 'Sorry, the email \'' . $_POST['email'] . '\' is already in use.'; 
		}
	}
} //NOTE $errors array function is set in users.php
?>
<section id="register">
<h1>Register</h1>
<?php 
		if (isset($_GET['success']) && empty($_GET['success'])) {// checks for 'success' value submitted below by header function
				echo 'You have now been registered! Please check your email to activate your account...';
			} else { 
				if ((empty($_POST) == false) && (empty($errors) == true)) { // checks errors array and for post data, then values are stored in an array then cast to a variable and processed using 'register_user' function called from user.php
					$register_data = array(
					'user_name' 	=> $_POST['user_name'],
					'password' 		=> $_POST['password'],
					'first_name' 	=> $_POST['first_name'],
					'last_name' 	=> $_POST['last_name'],
					'email' 		=> $_POST['email'],
					'email_code'	=> md5($_POST['user_name'] + microtime()),
					'city' 			=> $_POST['city'],
					'sport_activity_sport_id'=> $_POST['sport_activity'],
					'advert_id'=> $_POST['sport_activity']
					);
					register_user($register_data);//as above
					header('Location: register.php?success');//then post success to activate success message
					exit();
				} else if (empty($errors) == false) {
					echo output_errors($errors); // output any errors in the $errors array. 'output_errors' is called from general.php
				}
?>
<form method="post" action="">
	<ul>
		<li>
			Username*:<br />
			<input type="text" name="user_name" />
		</li>
		<li>
			Password*:<br />
			<input type="password" name="password" />
		</li>
		<li>
			Re-enter Password*:<br />
			<input type="password" name="password_check" />
		</li>
		<li>
			First name*:<br />
			<input type="text" name="first_name" />
		</li>
		<li>
			Last name*:<br />
			<input type="text" name="last_name" />
		</li>
		<li>
			Email*:<br />
			<input type="text" name="email" />
		</li>
		<li>
			City:<br />
			<input type="text" name="city" />
		</li>
			Select your fave sport*:<br />
		<select name="sport_activity">
			<?php 
				 $sql = "SELECT * FROM sport_activity"; //grab all sports from DB
			     $query = mysql_query($sql);
			     while ($results[] = mysql_fetch_object ($query)); //bang results into an array
			     array_pop ($results); //delete the last element of the array (no repeating due to the while loop)
			 ?>
		     <?php foreach ( $results as $option ) : ?>
		          <option value="<?php echo $option->sport_id;//SID is cast to the DB ?>"><?php echo $option->sport_name;//sport name is renderd to the user ?></option>
		     <?php endforeach; ?>
		</select>
		<li>
			<input type="submit" name="Submit" />
		</li>
	</ul>
</form>
</section>
<?php 
}// close if statement (if the condition is NOT met, then the form will stay on display!!
include '_inc/overall/footer.php'; ?>