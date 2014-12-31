
<?php
/*
* I wrote this because I was including a file with classes in it. Let's say that
* I have a contact page at mysite.com/contact/index.php and a Form class at
* mysite.com/classes/Form.php. So in index.php, I have this statement:
* require '../classes/Form.php';
* The Form class includes a method to generate the HTML markup for a number of
* form elements, including a CAPTCHA image and associated text field. To do so,
* it must generate an <img /> element and give it a src of Form.php?captcha.
* But I wanted it to automatically generate a src attribute without index.php
* giving it a relative path. This script comes in handy by automatically
* locating the directory that contains the included file (Form.php) and converting
* it from an absolute path to a relative path that could be used for an img src,
* an a href, a link href, etc.
*/
function relativeURL () {
    $dir = str_replace('\\', '/', __DIR__);
        // Resolves inconsistency with PATH_SEPARATOR on Windows vs. Linux
        // Use dirname(__FILE__) in place of __DIR__ for older PHP versions
    return substr($dir, strlen($_SERVER['DOCUMENT_ROOT']));
        // Clip off the part of the path outside of the document root
}

/*
*contact/index.php
*/
require '../classes/Form.php';
new Form()->drawCaptchaField();
    // Writes: <img src="/classes/Form.php?captcha" />

   
/*
* classes/Form.php
*/
if (isset($_GET['captcha'])) {
    // generate/return CAPTCHA image
}

class Form {
    // ...
    public function drawCaptchaField () {
        echo '<img src="'.relativeURL().'?captcha" />';
    }
}
?>

