<?php 						///////// NOT A FAN OF THIS SCRIPT... ????
include 'core/init.php';			//Import/include 'Initilise' file init.php
protect_page();						//user login check function called from general.php
include '_inc/overall/header.php';	//Import/include 'Header' file header.php
?>
<section class="topics_header">
<h1>Forum</h1>
<h2>Topics</h2>
<?php
$cid = $_GET['cid']; // grab catagory ID value

if (isset($_SESSION['user_id'])) { // check for user signin
 		$logged = " | <a href='create_topic.php?cid=" . $cid . "'> Click here to create a new topic</a>"; //link to create new topic set to varable
} else {
		$logged = " | Please login to create a new topic in this forum"; // error if user NOT logged set to varabile 
}
$sql1 = "SELECT id FROM  `forum_categories` WHERE id = " . $cid  . " LIMIT 1";
$result = mysql_query($sql1);
if  (mysql_num_rows($result) == 1) {
	$sql2 = "SELECT * FROM topics WHERE category_id = '" . $cid . "' ORDER BY topic_reply_date DESC";
	$result2 = mysql_query($sql2);
	if (mysql_num_rows($result2) > 0) {
			$topics  ="<table>"; 
			$topics .=" <tr><td colspan='3'><a	href='forum.php'> Return to forum index.</a>" . $logged . " <hr /></td></tr>";
			$topics .=" <tr style='background-color: #ddd'><td>Topic Title </td><td width='65px' align= 'center'>Replies </td><td width='65' align= 'center'>Views </td></tr>";
			$topics .=" <tr><td colspan='3'><hr /> </td></tr>";
			while ($row = mysql_fetch_assoc($result2)) {
				
				$tid 	= $row['id'];
				$title		= $row['topic_title'];
				$views		= $row['topic_views'];
				$date		= $row['topic_date'];
				$creator	= $row['topic_creator'];
				$topics		.= "<tr><td><a href='view_topic.php?cid=" . $cid . "&tid=" . $tid . "'>" . $title . "</a><br /><span class='post_info'> Posted
				by: " . $creator . " on " . $date . "</span></td><td align= 'center'>ERROR</td><td align= 'center'>". $views ."</td></tr>";
				$topics .=" <tr><td colspan='3'><hr /> </td></tr>";
				
				}
				$topics .=" </table>";
				echo $topics;
		} else {
			echo "<a href='forum.php'> Return to forum index</a>";
			echo "<p>There are no topics in this category yet. ". $logged ."</p>";
		}
} else	{
	echo "<a href='forum.php'> Return to forum index</a>";
	echo "<p>You're trying to view a category that doesn't exist yet...</p>";
}

?>
</section>
<?php include'_inc/overall/footer.php'; ?>