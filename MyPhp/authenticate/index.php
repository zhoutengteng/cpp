<?php

$auth_realm = 'Mtyy realm';

require_once 'auth.php';
//echo $auth_realm;
echo "You've logged in as {$_SESSION['username']}<br>";
echo '<p><a href="?action=logOut">LogOut</a></p>'

?>
