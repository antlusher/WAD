<div class="widget">
	<h2>Hello <?php echo $user_data['first_name']; ?>, welcome back!</h2>
	<div class="inner">
		<div class="profile_img">
			<?php 
			if (isset($_FILES['profile']) == true) {
				if (empty($_FILES['profile']['name']) == true) {
					echo 'Please choose a profile picture';
				} else {
					$allowed 	= array('jpg', 'jpeg', 'gif', 'png');
					$file_name 	= $_FILES['profile']['name'];
					$file_ext 	= strtolower(end(explode('.', $file_name))) ;
					$file_temp 	= $_FILES['profile']['tmp_name'];
					if (in_array($file_ext, $allowed ) == true) {
						user_profile_image($session_user_id, $file_temp, $file_ext);
						header('Location: index.php');
						exit();
					} else {
						echo 'Incorrect file type. Files must end with jpg, jpeg, gif or png.';
					}
				}
			}
			if (empty($user_data['profile']) == false) {
				echo '<img src="', $user_data['profile'],'"  alt="',$user_data['first_name'],'\'s Profile Picture" />';
			}
			 ?>
			 <form method="post" action="" enctype="multipart/form-data">
			 	<input type="file" name="profile" /> <input type="submit" /> 
			 </form>
		</div>
		<ul>
			<li> 
				<a href="logout.php">Log out</a>
			</li>
			<li> 
				<a href="<?php echo $user_data['user_name']; ?>">Profile</a>
			</li>
			<li>
				<a href="change_password.php">Change password</a>
			</li>
			<li>
				<a href="settings.php">Profile Settings</a>
			</li>
		</ul>
	</div>
</div>