
<html>
<head>
<title> PHP Test Script </title>
</head>
<body>
<?php 

$result = mysql_query("SELECT * FROM user");

while($row = mysql_fetch_array($result))
  {
  echo $row['first_name'] . " " . $row['sport_name'];
  echo "<br />";
  }

?>
</body>
</html>
SELECT Persons.LastName, Persons.FirstName, Orders.OrderNo
FROM Persons
INNER JOIN Orders
ON Persons.P_Id=Orders.P_Id
ORDER BY Persons.LastName