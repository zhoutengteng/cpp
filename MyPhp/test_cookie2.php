
<?php
$nextWeek = time()-3600;
echo $nextWeek."<br>";
?>


<?php
if (isset($_COOKIE["user"])&& !empty($_COOKIE["user"])) {
  echo "Welcome " . $_COOKIE["user"] . "!<br />";
  print_r($_COOKIE);
  echo $_COOKIE;
}  else { 

  echo "Welcomdddde guest!<br />";
}
?>

<?php 
// set the expiration date to one hour ago
setcookie("user", "", time()-36);
?>
<html>
</body>
</body>
</html>


