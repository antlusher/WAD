<?php 
require_once '../core/database/connect.php';
if (isset($_POST['search_term']) == true && empty($_POST['search_term']) == false) {// check for input data. 'empty' is to check for ANY type of input
	$search_term = mysql_real_escape_string($_POST['search_term']);// mysql_real_escape_string() used to to strip out any special charaters 
	$query = mysql_query("SELECT DISTINCT `city` FROM `user` WHERE `city` LIKE '$search_term%' LIMIT 5"); //SQL wild card used on variable, return max 5 items that are distinct (no repeted values)
	
	while (($row = mysql_fetch_assoc($query))!== false) {
		echo '<li>', $row['city'],'</li>'; //while loop returns user query
		
	}
}
?>