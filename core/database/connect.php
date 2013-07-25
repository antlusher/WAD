<?php
$connect_error = 'Sorry, we\'re experiencing connection issues';
mysql_connect('localhost', 'root', 'root') or die($connect_error);
mysql_select_db('app_dev_sport') or die($connect_error);

?>