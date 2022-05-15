<?php
 $login=filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
 $name=filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
 $pass=filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);
 $pass2=filter_var(trim($_POST['pass2']),FILTER_SANITIZE_STRING);
 $log=$_GET['id'];
 if(mb_strlen($login) <5 || mb_strlen($login) > 90 ) {
   setcookie("error11", "Недопустимая длина логина", time() + 3600 * 24 * 30, "/");
   header('Location: /update.php');
   exit();
}   else if(mb_strlen($name) <3 || mb_strlen($name) > 50 ) {
   setcookie("error12", "Недопустимая длина имени", time() + 3600 * 24 * 30, "/");
   header('Location: /update.php');
   exit();
}   else if(mb_strlen($pass) <2 || mb_strlen($pass) > 6 ) {
   setcookie("error13", "Недопустимая длина пароля (от 2 до 6 символов)", time() + 3600 * 24 * 30, "/");
   header('Location: /update.php');
   exit();
}
else if($pass != $pass2){
   setcookie("error14", "Пароли не совпадают", time() + 3600 * 24 * 30, "/");
   header('Location: /update.php');
   exit();
}
else if(empty($_FILES['img_upload']['tmp_name'])){
   setcookie("error15", "Загрузите аватарку", time() + 3600 * 24 * 30, "/");
   header('Location: /update.php');
   exit();
 }
 $image=addslashes(file_get_contents($_FILES['img_upload']['tmp_name']));

 $pass=md5($pass."ghjbnm");

 $mysql= new mysqli('127.0.0.1','root','','register-bd');
 if ($sql=$mysql->query("SELECT * FROM `users` WHERE `login`='$login'") and $sql->num_rows>0 and $login!=$log)
 { 
 echo "Пользователь с таким логином уже существет"; 
 $mysql->close();
 exit();
 } 
 echo $name;
 $mysql->query("UPDATE `users` SET `login` = '$login' WHERE `users`.`id` = $log");
 $mysql->query("UPDATE `users` SET `name` = '$name' WHERE `users`.`id` = $log");
 $mysql->query("UPDATE `users` SET `pass` = '$pass' WHERE `users`.`id` = $log");
 $mysql->query("UPDATE `users` SET `image` = '$image' WHERE `users`.`id` = $log");
 
 $mysql->close();
 header('Location: /admin.php');
?>