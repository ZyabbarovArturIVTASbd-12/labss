<?php
include_once $_SERVER['DOCUMENT_ROOT']."/db.class.php";
DB::getInstance();
    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);

    $pass=md5($pass."ghjbnm");

    
    
    $result = DB :: query("SELECT * FROM `users` WHERE `login`='$login' AND `pass`='$pass'");
    $user = $result -> fetch_assoc();
    if(count($user) == 0) {
        setcookie("error4", "Такой пользователь не найден", time() + 3600 * 24 * 30, "/");
        header('Location: /registr.php');
        exit();
    }

    setcookie('user', $user['name'], time() + 3600 * 24 * 30, "/");
    setcookie('login', $user['login'], time() + 3600 * 24 * 30, "/");
    setcookie('admin', $user['admin'], time() + 3600 * 24 * 30, "/");
    setcookie('image', $user['image'], time() + 3600 * 24 * 30, "/");


    /*print_r($user);
    exit(); */



    header('Location: /index.php');
?>