<?php
mysql_connect("localhost", "root", "root") or die(mysql_error());
echo "Connected to MySQL<br />";
mysql_select_db("app_dev_sport") or die(mysql_error());
echo "Connected to Database";
?>