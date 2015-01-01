<?php
header("Content-type: text/html; charset=utf-8");
//header("Content-type: text/plain\n\n");
/**
* Result:
* POST: B, Variable: C
* GLOBALS: C, Variable: C
*/

// Testing $_POST
$_POST['A'] = 'B';

$nonReferencedPostVar = $_POST;
$nonReferencedPostVar['A'] = 'C';

echo 'POST: '.$_POST['A'].', Variable: '.$nonReferencedPostVar['A']."\n\n";

echo "<br/>";
// Testing Globals
$GLOBALS['A'] = 'B';

$nonReferencedGlobalsVar = $GLOBALS;
$nonReferencedGlobalsVar['A'] = 'C';

echo 'GLOBALS: '.$GLOBALS['A'].', Variable: '.$nonReferencedGlobalsVar['A']."\n\n";






class glb
{
    static public function set($name, $value)
    {
        $GLOBALS[$name] = $value;
    }

    static public function get($name)
    {
        return $GLOBALS[$name];
    }

}

$myglobalvar = 'Hello, World !';

function myfunction()
{
    $val = glb::get('myglobalvar');
    echo "<br/>";
    echo "$val\n"."<br/>";
    glb::set('myglobalvar', 'hi, again :)');
    $val = glb::get('myglobalvar');
    echo "$val\n";
}

myfunction();




?>

<?php
$conf['conf']['foo'] = 'this is foo';
$conf['conf']['bar'] = 'this is bar';

function foobar() {
    global $conf;
    var_dump($conf);
}
echo 'aaaaaaaaa'."<br/>";
foobar();
?>
