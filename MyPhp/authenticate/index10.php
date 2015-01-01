<?php
// RFC 2616 compatible Accept Language Parser
// http://www.ietf.org/rfc/rfc2616.txt, 14.4 Accept-Language, Page 104
// Hypertext Transfer Protocol -- HTTP/1.1

foreach (explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']) as $lang) {
    $pattern = '/^(?P<primarytag>[a-zA-Z]{2,8})'.
    '(?:-(?P<subtag>[a-zA-Z]{2,8}))?(?:(?:;q=)'.
    '(?P<quantifier>\d\.\d))?$/';

    $splits = array();

    printf("Lang:,,%s''\n", $lang);
    echo "<br/>";
    if (preg_match($pattern, $lang, $splits)) {
        print_r($splits);
    } else {
        echo "<br/>"."no match"."<br/>;
    }
}

?>
