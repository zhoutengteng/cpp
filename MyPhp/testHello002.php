<?php
 header("Content-type: text/html; charset=utf-8"); 
// 定义对大小写不敏感的常量
define("GREETING", "Welcome to W3School.com.cn!", true);
echo GREETING;
echo "<br>";
// 会输出常量的值
echo greeting;

$x=10; 
$y=6;
echo ($x + $y); // 输出 16
echo ($x - $y); // 输出 4
echo ($x * $y); // 输出 60
echo ($x / $y); // 输出 1.6666666666667
echo ($x % $y); // 输出 4

$x=10; 
echo $x; // 输出 10

$y=20; 
$y += 100;
echo $y; // 输出 120

$z=50;
$z -= 25;
echo $z; // 输出 25

$i=5;
$i *= 6;
echo $i; // 输出 30

$j=10;
$j /= 5;
echo $j; // 输出 2

$k=15;
$k %= 4;
echo $k; // 输出 3

$a = "Hello";
$b = $a . " world!";
echo $b; // 输出 Hello world!

$x="Hello";
$x .= " world!";
echo $x; // 输出 Hello world!

$x=100; 
$y="100";

var_dump($x == $y);
echo "<br>";
var_dump($x === $y);
echo "<br>";
var_dump($x != $y);
echo "<br>";
var_dump($x !== $y);
echo "<br>";

$a=50;
$b=90;

var_dump($a > $b);
echo "<br>";
var_dump($a < $b);
?>  
