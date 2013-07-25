<?php 
include 'core/init.php';			//Import/include 'Initilise' file init.php
include '_inc/overall/header.php';	//Import/include 'Header' file header.php
?>
<div class="main_content">
<?php
session_start();
if	($_SESSION['user_id'] == "") {
	header('Location: protected.php');
	exit();
	}
	if (isset($_POST['topic_submit'])) {
		if (($_POST['topic_title'] == "") && ($_POST['topic_content'] == "")) {
			echo 'You did not complete both fields. Please return to the previous page.';
			exit();
			
			} else {
				$cid 		= $_POST['cid'];
				$title 		= $_POST['topic_title'];
				$content 	= $_POST['topic_content'];
				$creator 	= $_SESSION['user_id'];
				
				$sql = "INSERT INTO topics (category_id, topic_title, topic_creator, topic_date, topic_reply_date) VALUES ('" . $cid . "', '" . $title . "', '" . $creator . "', NOW(), NOW())";
				$result 		= mysql_query($sql) or die(mysql_error());
				$new_topic_id 	= mysql_insert_id();
				
				$sql2 = "INSERT INTO posts (category_id, topic_id, post_creator, post_content, post_date) VALUES ('" . $cid . "', '" . $new_topic_id . "', '" . $creator . "', '" . $content . "', now())";
				$result2 = mysql_query($sql2) or die(mysql_error());
				
				$sql3 = "UPDATE forum_categories SET last_post_date= NOW(), last_user_posted='" . $cid . "' WHERE id= '" . $cid . "' LIMIT 1";
				$result3 = mysql_query($sql3) or die(mysql_error());
				
				if (($result) && ($result2) && ($result3))	{
					header('Location: view_topic.php?cid='. $cid .'&tid='.$new_topic_id.'');
					
					} else {
						
						echo 'There was a problem creating your topic. Please try again!';
						
						}
				

				
				}
		
		}
?>
</div>
<?php include'_inc/overall/footer.php'; ?> 	<!--Import/include 'footer' file footer.php -->