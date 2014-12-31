<?php
    echo "djsflsjfdfj";
$dsn="mysql:host=localhost;dbname=MyDatabase";
$db = new PDO($dsn, 'root', '1992927teng');

$rs=$db->query("SELECT * FROM user");
foreach($row=$rs->fetch()) {
    print_r($row);
    }
    
    $db=null;
    echo "djsflsjfdfj";
?>
