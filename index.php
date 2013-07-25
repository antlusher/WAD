<?php 
include 'core/init.php';			//Import/include 'Initilise' file init.php
include '_inc/overall/header.php';	//Import/include 'Header' file header.php
?>
<?php 
if (empty($_POST['location_search']) == false) { // so returns TRUE if a location is provided by the user.. Then carry out the followinf
	$location = $_POST['location_search'];
	$result = mysql_query(
	"SELECT * FROM `user`
	LEFT JOIN sport_activity ON sport_activity_sport_id = sport_activity.sport_id 
	WHERE `city` = '" . $location . "'
	"); // Above was really hard to first understand!!! Selecting data from two tables that both are connected by a key
			while($row = mysql_fetch_array($result))
			{ 
			  echo "<article class='user_container'> 
			  			<section id='profile_discription'>
			  				<h2>User Name: " . $row['user_name'] . "</h2>
			  				 <p>Real Name: " . $row['first_name'] . " " . $row['last_name'] . "
			  				 <br />Home City: " . $row['city'] . "
			  				 <br />Fave Sport: " . $row['sport_name'] . "</p>
			  				 <p>About: " . $row['user_description'] . " </p>
			  			</section>
			  				<a href='http://localhost:8888/WAD/" . $row['user_name'] . "'><img id='profile' src='" . $row['profile'] .  "' /></a>
			  		</article>" ; // must be a better way to code the above.. Maybe implode?!
		 } 
		
} else {
	$result = mysql_query("SELECT * 
			FROM user
			LEFT JOIN sport_activity ON sport_activity_sport_id = sport_activity.sport_id
			ORDER BY RAND( ) 
			LIMIT 3");
			while($row = mysql_fetch_array($result)) // else just output random user profiles
			{ 
			  echo "<article class='user_container'>
			  			<section id='profile_discription'>
			  				<h2>User Name: " . $row['user_name'] . "</h2>
			  				 <p>Real Name: " . $row['first_name'] . " " . $row['last_name'] . "
			  				 <br />Home City: " . $row['city'] . "
			  				 <br />Fave Sport: " . $row['sport_name'] . "</p>
			  				 <p>About: " . $row['user_description'] . " </p>
			  			</section>
			  				<a href='http://localhost:8888/WAD/" . $row['user_name'] . "'><img id='profile' src='" . $row['profile'] .  "' /></a>
			  		</article>" ; // Above hyper link to selected user profile
		} 
		
}
?>
<?php include'_inc/overall/footer.php'; ?> 	<!--Import/include 'footer' file footer.php -->