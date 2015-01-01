
<?php

$x = array("a" => "2", "b" => "green"); 
$y = array("b" => "greenn","a" => "2"); 
//$y = array("c" => "blue", "d" => "yellow"); 
$z = $x + $y; // $x 与 $y 的联合
var_dump($z);
echo "<br>";
var_dump($x == $y);
echo "<br>";
var_dump($x === $y);
echo "<br>";
var_dump($x != $y);
echo "<br>";
var_dump($x <> $y);
echo "<br>";
var_dump($x !== $y);


$x = array("a", "b"); 
$y = array("c", "d"); 
$z = $x + $y; // $x 与 $y 的联合
var_dump($z);
echo "<br>";
var_dump($x == $y);
echo "<br>";
var_dump($x === $y);
echo "<br>";
var_dump($x != $y);
echo "<br>";
var_dump($x <> $y);
echo "<br>";
var_dump($x !== $y);


$t=date("H");

if ($t<"10") {
   echo "Have a good morning!";
} else if ($t<"20") {
   echo "Have a good day!";
} else {
   echo "Have a good night!";
}



function familyName($fname) {
  echo "$fname Zhang.<br>";
}

familyName("Li");
familyName("Hong");
familyName("Tao");
familyName("Xiao Mei");
familyName("Jian");


function familyName1($fname,$year) {
  echo "$fname Zhang. Born in $year <br>";
}

familyName1("Li","1975");
familyName1("Hong","1978");
familyName1("Tao","1983");

function setHeight($minheight=50) {
   echo "高度是：$minheight <br>";
}

setHeight(350);
setHeight();
setHeight(135);
setHeight(80);

function sum($x,$y) {
   $z=$x+$y;
   return $z;
}

echo "5 + 10 = " , sum(5,10) , "<br>";
echo "7 + 13 = " . sum(7,13) . "<br>";
echo "2 + 4 = " . sum(2,4);

$cars=array("Volvo","BMW","SAAB"); 
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";


?> 
