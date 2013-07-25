<?php 
include 'core/init.php';			
	protect_page();
		if ((!isset($_SESSION['user_id'])) || ($_GET['cid']) == "") { //check to see if both a user_id and a catagory value id POSTed
			header('Location: protected.php');// if not redirect user to 'protected.php'
			exit();
		}
include '_inc/overall/header.php';
$cid = $_GET['cid'];
$tid = $_GET['topic_id'];
?>
<div class="main_content">
	<h1>Forum</h1>
	<h2>Post Reply</h2> 
		<p><a href='forum.php'> Return to forum index</a></p>
			<hr />
			<div id="content">
				<form action="post_reply_parse.php" method="post"> <!--calls post_reply_parse.php action to process form-->
					<p>Reply Content</p>
					<textarea name="reply_content" style="resize: none;" rows="5" cols="60"></textarea>
						<br /><br />
						<input type="hidden" name="cid" value="<?php echo $cid; ?>" />
						<input type="hidden" name="tid" value="<?php echo $tid; ?>" />
						<input type="submit" name="reply_submit" value="Reply" />
				</form>
			</div>
</div>
<?php include'_inc/overall/footer.php'; ?>