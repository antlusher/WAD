<?php 
include 'core/init.php';			//Import/include 'Initilise' file init.php
protect_page();						//user login check function called from general.php
include '_inc/overall/header.php';	//Import/include 'Header' file header.php
?>
<section class="topics">
<h1>Forum</h1>
<h2>Topics</h2> 
<?php
	$cid = $_GET['cid']; //grab cid and tid values and set to varables
	$tid = $_GET['tid'];
	echo "<h3><a href='view_category.php?cid=" . $cid . "'>Return to Topic</a></h3>";
	$sql = "SELECT * FROM topics WHERE category_id = '" . $cid . "' AND id = '" . $tid . "' LIMIT 1";
	$result = mysql_query($sql) or die(mysql_error());
								if (mysql_num_rows($result) == 1) {
										if (isset($_SESSION['user_id']) == true) {
											$submit_error = "<div><input type='submit' value='Add Reply' onClick=\"window.location = 'post_reply.php?cid=" . $cid . "&topic_id=" . $tid . "'\" /></div>";
											} else {
												$submit_error = "<div><p> Please login to add a comment!</p></div>";						
												}
													while ($row = mysql_fetch_assoc($result)) {
														$sql2 = "SELECT * FROM posts WHERE category_id= '" .$cid. "' AND topic_id = '" .$tid. "'"; // grab topic data set to varable 
														$result2 = mysql_query($sql2) or die (mysql_error());
															while ($row2 = mysql_fetch_assoc($result2)) { // display topic according to catagory id and topic id values
																		echo "<div class='topic_contaner'> " . $row['topic_title']. " <br />by ".$sql_topic_author['user_name']." - ".$row2['post_date']." <hr />
																				<div class='topic_content'> ".$row2['post_content']." </div> 
																				<div class='topic_user'>User Info Here </div>
																			</div>";
																		echo $submit_error;
															}
														$old_views = $row['topic_views']; // grab current view count
														$new_views = $old_views + 1; // add 1 to current count 
														$sql3 = "UPDATE topics SET topic_views='" . $new_views . "' WHERE category_id='" .$cid . "' AND id='" . $tid . "' LIMIT 1 ";// update topic views
														$result3 = mysql_query($sql3) or die(mysql_error());
													}
													
											} else {
													echo "<p> That topic does not exist!</p>"; // output erroe
									}
?>
</section>
<?php include'_inc/overall/footer.php'; ?>
<!--Import/include 'footer' file footer.php -->