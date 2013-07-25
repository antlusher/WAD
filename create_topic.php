<?php 
include 'core/init.php';			
protect_page();
if ((!isset($_SESSION['user_id'])) || ($_GET['cid']) == "") {
	header('Location: protected.php');
		exit();
	}
include '_inc/overall/header.php';
$cid = $_GET['cid'];
?>
<div class="main_content">
	<h1>Forum</h1>
	<h2>Topic Page</h2> 
		<p><a href='forum.php'> Return to forum index</a></p>
	<hr />
	<div id="content">
		<form action="create_topic_parse.php" method="post">
				Topic Title
				<br />
			<input type="text" name="topic_title" size="90" maxlength="150"	/>
				<br /><br />
				Topic Content
			<textarea name="topic_content"  style="resize: none;" rows="5" cols="65"></textarea>
				<br /><br />
			<input type="hidden" name="cid" value="<?php echo $cid; ?>" />
			<input type="submit" name="topic_submit" value="Create your topic" />
		</form>
	</div>
</div>
<?php include'_inc/overall/footer.php'; ?>