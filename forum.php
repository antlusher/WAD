<?php 
include 'core/init.php';			//Import/include 'Initilise' file init.php
protect_page();						//user login check function called from general.php
include '_inc/overall/header.php';	//Import/include 'Header' file header.php
?>
<section class="categories">
	<h1>Forum</h1>
	<h2>Categories</h2>
		<?php
		$sql = "SELECT * FROM  `forum_categories` ORDER BY `category_title` ASC";
		$result = mysql_query($sql);
		$categories = "";// just a cheat to declare a varable for HTML result output
		if  (mysql_num_rows($result) > 0) {// checks if more than 0 results
		
			while ($row = mysql_fetch_assoc($result)) {// loop output the amout of categories
				$cat_id 		= $row['id'];
				$title 			= $row['category_title'];
				$description 	= $row['category_description'];
				$categories		.=  "<a href='view_category.php?cid=" . $cat_id  ."' class='cat_links'>" .$title. " - <font size='-1'>  " .$description. " </font></a>"; //create a link to topic
				}
				echo $categories;
		} else	{
			echo '<p>No topics yet!</p>';			
			}
		?>
</section>
<?php include'_inc/overall/footer.php'; ?>