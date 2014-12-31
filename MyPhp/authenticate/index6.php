<?php
print_r($GLOBALS['_GET']);
echo "<br/>";

function AddGet($ArrayOrString){
if(is_array($ArrayOrString))
return http_build_query(array_merge($GLOBALS['_GET'], $ArrayOrString));
parse_str($ArrayOrString, $output);
return http_build_query(array_merge($GLOBALS['_GET'], $output));
}


echo addget("change=true"); // ?change=true
echo "<br/>";

echo addget("change=false"); // ?change=false

echo "<br/>";
$_GET['a'] = 'aaaa';

?> 




<?php
function test() {
    $foo = "local variable";

    echo '$foo in global scope: ' . $GLOBALS["foo"] . "<br/>";
    echo '$foo in current scope: ' . $foo . "\n";
}

$foo = "Example content";
test();
?>

