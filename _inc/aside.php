<aside>
	<?php 
	if (logged_in() == true) {
		include '_inc/widgets/loggedin.php'; 
	} else {
		include '_inc/widgets/login.php'; 
	}
		include '_inc/widgets/user_count.php';
	?>
</aside>