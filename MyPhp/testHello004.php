<?php
//$cars=array("Volvo","BMW","SAAB"); 
//echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

$cars[0]="Volvo";
$cars[1]="BMW";
$cars[2]="SAAB";

echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

$cars=array("Volvo","BMW","SAAB");
$arrlength=count($cars);

for($x=0;$x<$arrlength;$x++) {
   echo $cars[$x];
   echo "<br>";
}

$age=array("Bill"=>"35","Steve"=>"37","Peter"=>"43");

foreach($age as $x=>$x_value) {
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
}

$cars = array
   (
   array("Volvo",33,20),
   array("BMW",17,15),
   array("Saab",5,2),
   array("Land Rover",15,11)
   );
   
echo $cars[0][0].": 库存：".$cars[0][1].", 已售：".$cars[0][2].".<br>";
echo $cars[1][0].": 库存：".$cars[1][1].", 已售：".$cars[1][2].".<br>";
echo $cars[2][0].": 库存：".$cars[2][1].", 已售：".$cars[2][2].".<br>";
echo $cars[3][0].": 库存：".$cars[3][1].", 已售：".$cars[3][2].".<br>";


$cars;// = array
  // (
 //  array("Volvo",33,20),
 //  array("BMW",17,15),
 //  array("Saab",5,2),
//   array("Land Rover",15,11)
//   );
$cars[0][0] = "Volvo";
$cars[0][1] = 33;
$cars[0][2] = 20;
$cars[1][0] = "Volvo";
$cars[1][1] = 33;
$cars[1][2] = 20;
$cars[2][0] = "Volvo";
$cars[2][1] = 33;
$cars[2][2] = 20;
$cars[3][0] = "Volvo";
$cars[3][1] = 33;
$cars[3][2] = 20;
$cars[4][1] = "zhou";  
for ($row = 0; $row <  4; $row++) {
   echo "<p><b>行数 $row</b></p>";
   echo "<ul>";
   for ($col = 0; $col <  3; $col++) {
     echo "<li>".$cars[$row][$col]."</li>";
   }
   echo "</ul>";
}
echo $cars[4][1];




$cars=array("Bolvo","BMW","SAAB");
sort($cars);

$clength=count($cars);
for($x=0;$x<$clength;$x++)
   {
   echo $cars[$x];
   echo "<br>";
   }

$numbers=array(3,5,1,22,11);
sort($numbers);

$arrlength=count($numbers);
for($x=0;$x<$arrlength;$x++)
   {
   echo $numbers[$x];
   echo "<br>";
   }

$cars=array("Bolvo","BMW",120, "SAAB", 2221);
rsort($cars);

$clength=count($cars);
for($x=0;$x<$clength;$x++)
   {
   echo $cars[$x];
   echo "<br>";
   }

?>
