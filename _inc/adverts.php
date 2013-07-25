<aside class="adverts">
<?php 
if (logged_in() == false ){
$result = mysql_query("SELECT * 
FROM adverts
LEFT JOIN sport_activity ON adverts.advert_type = sport_activity.sport_id
ORDER BY RAND( ) 
LIMIT 3");
	while($row = mysql_fetch_array($result))
		{ 
		  echo "<br />";
		  echo "<a href='" . $row['link'] .  "'><img src='" . $row['image'] .  "" . $row['sport_name'] . ".png' /></a>"; 
		  echo "<br />";
		  echo $row['discription'];  
	 }
} else {
		$uid = $_SESSION['user_id'];
		$result = mysql_query("SELECT * FROM user
			LEFT JOIN sport_activity ON user.sport_activity_sport_id = sport_activity.sport_id
			LEFT JOIN adverts ON user.advert_id = adverts.id
			WHERE user.user_id = '". $uid ."'");
			while($row = mysql_fetch_array($result))
			{ 
			  for ($i = 1; $i <= 3; $i++){
			  echo "<br />";
			  echo "<a href='" . $row['link'] .  "'><img src='" . $row['image'] .  "" . $row['sport_name'] . ".png' /></a>"; 
			  echo "<br />";
			  echo $row['discription'];  
			  }
		}
}
?>
</aside>