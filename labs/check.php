<?php
    include_once $_SERVER['DOCUMENT_ROOT']."/db.class.php";
    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']),
    FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);
    $pass2 = filter_var(trim($_POST['pass2']),
    FILTER_SANITIZE_STRING);
    if(mb_strlen($login) <5 || mb_strlen($login) > 90 ) {
        setcookie("error1", "Недопустимая длина логина", time() + 3600 * 24 * 30, "/");
        header('Location: /registr.php');
        exit();
    }   else if(mb_strlen($name) <3 || mb_strlen($name) > 50 ) {
        setcookie("error2", "Недопустимая длина имени", time() + 3600 * 24 * 30, "/");
        header('Location: /registr.php');
        exit();
    }   else if(mb_strlen($pass) <2 || mb_strlen($pass) > 6 ) {
        setcookie("error3", "Недопустимая длина пароля (от 2 до 6 символов)", time() + 3600 * 24 * 30, "/");
        header('Location: /registr.php');
        exit();
    }
    else if($pass != $pass2){
        setcookie("error", "Пароли не совпадают", time() + 3600 * 24 * 30, "/");
        header('Location: /registr.php');
        exit();
    }
    else if(empty($_FILES['img_upload']['tmp_name'])){
        
        setcookie("error5", "Загрузите аватарку", time() + 3600 * 24 * 30, "/");
        header('Location: /registr.php');
        exit();
      }
      //$image=addslashes(file_get_contents($_FILES['img_upload']['tmp_name']));
      $path='upload/avatars/'.time().$_FILES['img_upload']['name'];
      move_uploaded_file($_FILES['img_upload']['tmp_name'],$path);
    $pass=md5($pass."ghjbnm");
    $mysql= new mysqli('127.0.0.1','root','','register-bd');
    DB::getInstance();
    $login = htmlspecialchars($_POST['login']);


        $query = "SELECT * FROM `users` WHERE `login` = '$login'";
        $res = DB::query($query);

        if (($item = DB::fetch_array($res)) == true) {
            if ($chooseUserLogin != $item['login']) {
                echo "This login already exists";
                exit();
            }
        } 

    $mysql = new mysqli('127.0.0.1','root','','register-bd');
    $mysql->query("INSERT INTO `users` (`login`, `pass`, `name`,`image`) VALUES('$login', '$pass', '$name', '$path')");
    $mysql->close();

    header('Location: /registr.php');
    

?>