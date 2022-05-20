<?php
    include_once $_SERVER['DOCUMENT_ROOT']."/db.class.php";
    DB::getInstance();
    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']),
    FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);
    $pass2 = filter_var(trim($_POST['pass2']),
    FILTER_SANITIZE_STRING);
    
    if(mb_strlen($login) <5 || mb_strlen($login) > 90 ) {
        setcookie("error6", "Недопустимая длина логина", time() + 3600 * 24 * 30, "/");
        header('Location: /admin.php');
        exit();
    }   else if(mb_strlen($name) <3 || mb_strlen($name) > 50 ) {
        setcookie("error7", "Недопустимая длина имени", time() + 3600 * 24 * 30, "/");
        header('Location: /admin.php');
        exit();
    }   else if(mb_strlen($pass) <2 || mb_strlen($pass) > 6 ) {
        setcookie("error8", "Недопустимая длина пароля (от 2 до 6 символов)", time() + 3600 * 24 * 30, "/");
        header('Location: /admin.php');
        exit();
    }
    else if($pass != $pass2){
        setcookie("error9", "Пароли не совпадают", time() + 3600 * 24 * 30, "/");
        header('Location: /admin.php');
        exit();
    }
    else if(empty($_FILES['img_upload']['tmp_name'])){
        setcookie("error10", "Загрузите аватарку", time() + 3600 * 24 * 30, "/");
        header('Location: /admin.php');
        exit();
      }
      $path='upload/avatars/'.time().$_FILES['img_upload']['name'];
      move_uploaded_file($_FILES['img_upload']['tmp_name'],$path);
    $pass=md5($pass."ghjbnm");
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

    
    DB::query("INSERT INTO `users` (`login`, `pass`, `name`,`image`) VALUES('$login', '$pass', '$name', '$path')");
    

    header('Location: /admin.php');

?>