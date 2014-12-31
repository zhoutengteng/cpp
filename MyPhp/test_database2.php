<?php
$con = mysql_connect("localhost","root","1992927teng");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

if (mysql_query("CREATE DATABASE my_db",$con))
  {
  echo "Database created";
  }
else
  {
  echo "Error creating database: " . mysql_error();
  }
var_dump(mysql_query("CREATE DATABASE my_db", $con));
mysql_close($con);
?>
