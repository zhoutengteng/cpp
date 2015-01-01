<?php
header("Content-Type: text/html; charset=utf-8");
function GetBasePath() {
    return substr($_SERVER['SCRIPT_FILENAME'], 0, strlen($_SERVER['SCRIPT_FILENAME']) - strlen(strrchr($_SERVER['SCRIPT_FILENAME'], "/")));
}
echo GetBasePath()."\n";
echo $_SERVER['argc']."\n";

echo $_SERVER['argv'][0]."\n";
echo $_SERVER['argv'][1]."\n";
if( $_SERVER['argc'] == 2)
  {
    // funny... we have to do this trick to pass e.g. 0x020B from parameters
    // ignore this: "PHP Notice:  Undefined offset:  2 in ..."
    $EID = $_SERVER['argv'][1] + $_SERVER['argv'][1] + $_SERVER['argv'][1];
  }
else
   {        // default
     $EID = 0x020; // PPS failure
   }
echo $EID."<br/>";

?> 
