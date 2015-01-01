<?php
$_user_ = 'test';
$_password_ = 'test';
//$auth_realm = 'zhouteng';  // 这样引用的文件两个里面的相同变量都是通用的 可以互相修改  注意

session_start();   //开启会话 用这个可以进行一些逻辑上的额外控制

$url_action = (empty($_REQUEST['action'])) ? 'logIn' : $_REQUEST['action']; //超全局变量的引用 那个action则是a标签中的东西
$auth_realm = (isset($auth_realm)) ? $auth_realm : '';  //前一个py文件中的东西

if (isset($url_action)) {
    if (is_callable($url_action)) {   //进测变量$url_action的  所包含的名字是否可以函数等。。。 返回布尔值
        call_user_func($url_action);  //调用包含的函数
    } else {
        echo 'Function does not exist, request terminated';
    };
};

function logIn() {
    global $auth_realm;   //使用父函数的变量

    if (!isset($_SESSION['username'])) {      
        if (!isset($_SESSION['login'])) {
            $_SESSION['login'] = TRUE;
            header('WWW-Authenticate: Basic realm="'.$auth_realm.'"');  //这个就是固定的语法
            header('HTTP/1.0 401 Unauthorized');                       //这个就是固定的语法
            echo 'You must enter a valid login and password';
            echo '<p><a href="?action=logOut">Try again</a></p>';
            exit;
        } else {
            $user = isset($_SERVER['PHP_AUTH_USER']) ? $_SERVER['PHP_AUTH_USER'] : '';    //用上面的那个就有这些键对自动保存
            $password = isset($_SERVER['PHP_AUTH_PW']) ? $_SERVER['PHP_AUTH_PW'] : '';    //同上
            $result = authenticate($user, $password);      //自己写的简单验证函数
            if ($result == 0) {
                $_SESSION['username'] = $user;
            } else { 
                unset($_SESSION['login']);                  //职位Null
                errMes($result);                         //自己写的报错信息
                echo '<p><a href="">Try again</a></p>';
                exit;
            };
        };
    };
}

function authenticate($user, $password) {
    global $_user_;
    global $_password_;   //使用那个父父函数的变量   注意是支持引用的$

    if (($user == $_user_)&&($password == $_password_)) { return 0; }
    else { return 1; };
}

function errMes($errno) {
    switch ($errno) {
        case 0:
            break;
        case 1:
            echo 'The username or password you entered is incorrect';
            break;
        default:
            echo 'Unknown error';
    };
}

function logOut() {

    session_destroy();   //结束会话
    if (isset($_SESSION['username'])) {
        unset($_SESSION['username']);
        echo "You've successfully logged out<br>";
        echo '<p><a href="?action=logIn">LogIn</a></p>';
    } else {
        header("Location: ?action=logIn", TRUE, 301);  //类似一个定向的url  true 相当与一个替换的功能  301响应的值
    };
    if (isset($_SESSION['login'])) {unset($_SESSION['login']); };
    exit;
}

?>
