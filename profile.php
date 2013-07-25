<?php //////////////////////////// NOT HAPPY WITH THIS SCRIPT, I INTEND IT CLEAN IT UP BY USING ARRAYS AND WHILE LOOP////////////////////
	include 'core/init.php';	///// THIS WAS A QUICK SOLUTION///////////		
	include '_inc/overall/header.php';	
		if (isset($_GET['user_name']) == true && empty($_GET['user_name']) == false) {
				$username 		= $_GET['user_name'];
			if (user_exists($username) == true) {
				$user_id 		= user_id_from_username($username);
				$profile_data 	= user_data($user_id, 'first_name', 'last_name', 'email', 'profile', 'city', 'user_description', 'user_name', 'sport_name');  // call user_data function grabbing data from DB
				$profile_img	= $profile_data['profile']; // insert data into varable values ready for output
				$profile_city	= $profile_data['city'];
				$profile_email	= $profile_data['email'];
				$profile_fname	= $profile_data['first_name'];
				$profile_lname	= $profile_data['last_name'];
				$profile_desc	= $profile_data['user_description'];
				$profile_username 	= $profile_data['user_name'];
				$profile_sport 	= $profile_data['sport_name'];
				?> <!--Above script can have been improved, and will be edited at a later date-->
<section class="profile">
		<?php  echo "<div class='user_profile'> 
					<h1>" . $profile_fname . " " . $profile_lname . " </h1> 
					<hr />
					<h2> Fave Sport: " . $profile_sport . " </h2>
					<hr />
					<h2> Username: " . $profile_username . " </h2>
					<hr />
					<h2> Email: " . $profile_email . " </h2>
					<hr />
					<h2> Location: " . $profile_city . " </h2>
					<hr />
					<h2> Description: " . $profile_desc . " </h2>
					<div ='user_profile_img'><img width='350px' height='400px' src=" . $profile_img . "  /></div>";	
			?>
			<?php  
			} else { /// ^^^^ Above output user profile data
				echo '<h2>Sorry, but the user your are looking for does not exist!</h2>';	
				echo 'You are now being re-directed to the home page...';			
				header('Refresh: 5; index.php'); // display error and refresh after 5 seconds
				exit();
			}
		}
		?> 
</section>
<?php include'_inc/overall/footer.php'; ?> 	<!--Import/include 'footer' file footer.php -->