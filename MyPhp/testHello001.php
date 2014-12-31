<?php
    header("Content-type: text/html; charset=utf-8"); 
    echo "<p> Hello world  </p> ";
    $x1=5;
    $y1=6.3;
    $z=$x1+$y1;
    echo $z;
    echo "</br>";

    function myTestt() {
        echo $x;
       // $GLOBALS['z'] = 110;
       global $z;
       $z = 110;
       global $zh;
       $zh = 120;
    }

    $x=5;
    $y=10;
    function myTest() {
        global $x, $y;
        $y=$x+$y;
        $zh = -1;  
        myTestt();
        echo "zh";
        echo $zh;
        echo "</br>";
    }    

    myTest();
    echo $y; 
    echo "</br>";
    echo $z;
    echo "</br>";
    echo "这段话", "由", "多个", "字符串", "串接而成。", $z+10;


    $txt1="Learn PHP";
    $txt2="W3School.com.cn";
    $cars=array("Volvo","BMW","SAAB");
    echo $txt1;
    echo "<br>";
    echo "Study PHP at $txt2";
    echo "<br>";
    echo "My car is a $cars[2]";


    print $txt1;
    print "<br>";
    print "Study PHP at $txt2";
    print "My car is a {$cars[0]}";

    $x = 5985;
    var_dump(1236);
    echo "<br>"; 
    $x = -345; // 负数
    var_dump($x);
    echo "<br>"; 
    $x = 0x8C; // 十六进制数
    var_dump($x);
    echo "<br>";
    $x = 047; // 八进制数
    var_dump($x);

    $cars=array("Volvo","BMW","SAAB");
    var_dump($cars);
    
    $x=true;
    $y=false;    

    class Car {
        var $color;
        var $color1 = "green";
        function Car($color="green") {
          $this->color = $color;
        }
        function what_color() {
           return $this->color;
        }
    }
    function print_vars($obj) {
  //foreach操作的对象数组或者键对     get_object_vars(对象)返回的是所有的键对  后面的那个就是把键对的两个对应赋值给那两个
       foreach (get_object_vars($obj) as $prop => $val) {
         echo "\t$prop = $val\n";
       }
    }

// instantiate one object
    $herbie = new Car("white");

// show herbie properties
    echo "\herbie: Properties\n";
    print_vars($herbie);

?>

