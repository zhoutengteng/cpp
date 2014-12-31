<?php 
setcookie("user", "Alex Porter", time()+3600);
?>

<html>
<head> <meta charset="utf-8"></head>
<body>

<?php
// Print a cookie
echo $_COOKIE["user"]."</br>";

// A way to view all cookies
print_r($_COOKIE);
?>

</body>
</html>
