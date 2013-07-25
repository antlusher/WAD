<?php //////////////////////////// NOT HAPPY WITH THIS SCRIPT, I INTEND TO CLEAN UP *shakes head* (although not the worst)//////////////////////
include 'core/init.php';			
protect_page();
if (!isset($_SESSION['user_id'])){
	header('Location: protected.php');
		exit();
	}
include '_inc/overall/header.php';
?>
<div class="main_content">
<?php
if ($_SESSION['user_id']) {
if (isset($_POST['reply_submit'])) {
		$creator		= $_SESSION['user_id'];
		$cid			= $_POST['cid'];
		$tid			= $_POST['tid'];
		$reply_content	= $_POST['reply_content'];
			$sql = "INSERT INTO posts (category_id, topic_id, post_creator, post_content, post_date) VALUES ( '" . $cid . "', '" . $tid . "', '" . $creator . "', '" . $reply_content . "', NOW())"; // 'NOW()' sets current time
			$result = mysql_query($sql) or die(mysql_error());
			
			$sql2		= "UPDATE forum_categories SET last_post_date= NOW(), last_user_posted='" . $creator . "' WHERE id='" . $cid . "' LIMIT 1";
			$result2	= mysql_query($sql2) or die(mysql_error());
			
			$sql3		= "UPDATE topics SET topic_reply_date= NOW(), topic_last_user='" . $creator . "' WHERE id='" . $tid . "' LIMIT 1";
			$result3	= mysql_query($sql3) or die(mysql_error());
		if 		($result) {
			echo 'Your reply has been posted! <a href="view_topic.php?cid=' . $cid. '&tid=' . $tid . '"> Click here to return to the topic</a>
			<p>You are now being redirected to the comments...</p>';
			header( 'refresh: 3; url=view_topic.php?cid=' . $cid. '&tid=' . $tid . '' );// header refresh and re-direct after 3 secs as requested by Phil in demo
			exit;
		} else {
			echo 'There has been an issue with your post, please try again...';
			
			}
	
	} else {
		
exit();	
}
}
?>
</div>
<?php include'_inc/overall/footer.php'; ?>