


<!DOCTYPE html>
<html>
<head>  <meta charset="utf-8"> </head>
<body>

<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// 输出单字符直到 end-of-file
while(!feof($myfile)) {
  $x = fgetc($myfile);
  if ($x == "\n") {
     echo "<br>";
  }
  if ($x == " ") {
      echo "&nbsp;";
  } else {
      echo $x;
  }
}
fclose($myfile);
?>
<br>
<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Bill Gates\n";
fwrite($myfile, $txt);
$txt = "Steve Jobs\n";
fwrite($myfile, $txt);
fclose($myfile);
?>

</body>
</html>


