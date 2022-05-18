<!DOCTYPE html>
<html lang="ru">
<head> 
<link href="https://fonts.google.com/specimen/Oleo+Script" rel="stylesheet">
<meta charset="UTF-8">
<meta name = "viewport" content ="witdh=device-width">
<title>Мой сайт</title>
<link rel="stylesheet" href="styles/styles.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script type="text/javascript" src="script/jquery-3.6.0.js"></script>
<script type="text/javascript" src="script/script.js"></script>
</head>
<div class="op">
<body bgcolor="white">
<tr>
<a href="index.php" class="floating-button">Главная</a></td>
<a href="YA.php" class="floating-button">О себе</a></td>
<a href="game.php" class="floating-button">Моя любимая игра</a></td>
<a href="sobaka.php" class="floating-button">Моя собака</a></td>
<a href="galereya.php" class="floating-button">Галерея</a></td>
<a href="kontakt.php" class="floating-button">Контакты</a></td>
<a href="mlimd1.php" class="floating-button">МЛД</a></td>
<a href="mlimd2.php" class="floating-button">МЛД2</a></td>
<a href="mlimd3.php" class="floating-button">МЛД3</a></td>
<a href="mlimld4.1.php" class="floating-button">МЛД4</a></td>
<a href="ml5.1.php" class="floating-button">МЛД5</a></td>
<a href="notgame.php" class="floating-button">неигра</a></td>
        <div class="avtorisator">
            <?php
                if($_COOKIE['user']==''):
            ?>


            <a href="registr.php" class="floating-button">Регистрация/вход</a></td>

            </a>
            <?php else:?>
                <div>
                    <a href="exit.php" class="floating-button">Выход</a>
                    <a href="userpage.php" class="floating-button"><?=$_COOKIE['user']?></a>
                </div>
            <?php endif;?>

        </div>

<div class="cont">

<?php if($_COOKIE['admin']==1):?>
    <div class="adminpanel">
    <form action="adminadd.php" method="post" enctype="multipart/form-data" class="admininput">
        Пользователь<br>
        <input type="text"  placeholder="Логин" class="textarea" name="login" id="login"/> <?php if($_COOKIE['error6'] != ""){ print($_COOKIE['error6']);setcookie("error6", "Недопустимая длина логина", time() - 3600 * 24 * 30, "/");} ?> <br>
        <input type="text"  placeholder="Имя" class="textarea" name="name" id="name"/><?php if($_COOKIE['error7'] != ""){ print($_COOKIE['error7']);setcookie("error7", "Недопустимая длина имени", time() - 3600 * 24 * 30, "/");} ?><br>
        <input type="password"  placeholder="Пароль" class="textarea" name="pass" id="pass"/> <?php if($_COOKIE['error8'] != ""){ print($_COOKIE['error8']);setcookie("error8", "Недопустимая длина пароля (от 2 до 6 символов)", time() - 3600 * 24 * 30, "/");} ?> <br>
        <input type="password"  placeholder="Повторный пароль" class="textarea" name="pass2" id="pass2"/> <?php if($_COOKIE['error9'] != ""){ print($_COOKIE['error9']);setcookie("error9", "Пароли не совпадают", time() - 3600 * 24 * 30, "/");} ?> <br>
        <input type="file" class="file" name="img_upload" id="img_upload"/> <?php if($_COOKIE['error10'] != ""){ print($_COOKIE['error10']);setcookie("error10", "Загрузите аватарку", time() - 3600 * 24 * 30, "/");} ?> <br>
            
        <button class="addbutton" type="submit" id="add" name="add">Добавить пользователя</button>
    </form>
    <?php
     $link= new mysqli('127.0.0.1','root','','register-bd');
     if(isset($_GET['del'])){
        $log=$_GET['del'];
         $query="DELETE FROM users WHERE login='$log'";
         mysqli_query($link,$query);
     }
     $result=$link->query("SELECT * FROM users");
     for($data=[];$row=$result->fetch_assoc();){
        if($row['login']!="Admin"){
            $data[]=$row;
        }
     };
     ?>

     <table>
     <div class="tabletext">
     Пользователи
    </div>
    <tr>
    <td>Логин</td>
    <td>Имя</td>
     <?php foreach ($data as $user){?>
        <tr>
            <td><?=$user['login']?></td>
            <td><?=$user['name']?></td>
            <td><a href="?del=<?=$user['login']?>">Удалить</a></td>
            <td><a href="update.php?id=<?=$user['id']?>">Изменить</a></td>
        </tr>
        <?php }?>
     </table>
    <?php else:?>
        Данный пользователь не является админом
    <?php endif;?>
    </div>
</div>
<div class="footer">Коппирайт с этого сайта ЗАПРЕЩЕН! Если хотите использовать информацию, то платите деньги.</div>
</body>
</html>