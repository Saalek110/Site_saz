<?php 


$db_name = "database_name";
$mysql_username = "username";
$mysql_password = "password";
$server_name = "sql545.epizy.com";  // sql545.epizy.com
$ccoonn = mysqli_connect($server_name, $mysql_username, $mysql_password,$db_name);
if (!$ccoonn)
  {
  die("Connection error: " . mysqli_connect_error());
  }
 
?>