<?php
    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']),
    FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);
    
    if(mb_strlen($login) <5 || mb_strlen($login) > 90 ) {
        echo "Недопустимая длина логина";
        exit();
    }   else if(mb_strlen($name) <3 || mb_strlen($name) > 50 ) {
        echo "Недопустимая длина имени";
        exit();
    }   else if(mb_strlen($pass) <2 || mb_strlen($pass) > 6 ) {
        echo "Недопустимая длина пароля (от 2 до 6 символов)";
        exit();
    }
    else if(empty($_FILES['img_upload']['tmp_name'])){
        echo "Загрузите Аватарку";
        exit();
      }
      $image=addslashes(file_get_contents($_FILES['img_upload']['tmp_name']));
    $pass=md5($pass."ghjbnm");
    $mysql= new mysqli('127.0.0.1','root','','register-bd');
    if ($sql=$mysql->query("SELECT * FROM `users` WHERE `login`='$login'") and $sql->num_rows>0)
    { 
    echo "Пользователь с таким логином уже существет"; 
    $mysql->close();
    exit();
    } 

    $mysql = new mysqli('127.0.0.1','root','','register-bd');
    $mysql->query("INSERT INTO `users` (`login`, `pass`, `name`,`image`) VALUES('$login', '$pass', '$name', '$image')");
    $mysql->close();

    header('Location: /registr.php');

?>