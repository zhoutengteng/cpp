<?php
#header("X-Debug-Custom: 22");
header('Location:http://www.example.com/');
echo $_SERVER['HTTP_X_DEBUG_CUSTOM']; // "some string"

?>
