<!DOCTYPE html>
<html lang="ru">
<head> 
<link href="https://fonts.google.com/specimen/Oleo+Script" rel="stylesheet">
<meta charset="UTF-8">
<meta name = "viewport" content ="witdh=device-width">
<title>Мой сайт</title>
<link rel="stylesheet" href="styles/styles.css">
<script type="text/javascript" src="scripts/jquery-3.6.0.js"></script>
<script type="text/javascript" src="scripts/scripts1.js"></script>
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
<a href="ml5.php" class="floating-button">МЛД5</a></td>
        <div class="avtorisator">
            <?php
                if($_COOKIE['user']==''):
            ?>


            <a href="registr.php" class="floating-button">Регистрация/вход</a></td>

            </a>
            <?php else:?>
                <div>
                    <a href="exit.php" class="floating-button">Выход</a>
                    
                </div>
            <?php endif;?>

        </div>

<div class="userImage">
    <?php
    $login=$_COOKIE['login'];
    $mysql=new mysqli('127.0.0.1','root','','register-bd');
    $result=$mysql -> query("SELECT * FROM `users` WHERE `login`='$login'");
    $user=$result->fetch_assoc();
    $image=base64_encode($user['image']);
    
    ?>
    <img src="data:image/jpeg;base64, <?php echo $image?>" alt="">

</div>
<div class="userinfo">
    Имя: <?=$_COOKIE['user']?><br>
    Логин: <?=$_COOKIE['login']?><br>
    Админ:
    <?php if ($_COOKIE['admin']==0):?>
        Нет
    <?php else:?>
        Да
        <br>
        <a href="admin.php"> Админ панель </a>
    <?php endif;?>

</div>
</tr>
<div class="panelnav1"> 

</div>

</div>
<div class="footer">Коппирайт с этого сайта ЗАПРЕЩЕН! Если хотите использовать информацию, то платите деньги.</div>
</body> 
</html>