<!DOCTYPE html>
<html lang="en">

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

<body>
<div class="head">
     
    
    
</div>

<div class="cont">

<?php if($_COOKIE['admin']==1):?>
    <div class="adminpanel">
    <form action="adminedit.php?id=<?=$_GET['id'];?>" method="post" enctype="multipart/form-data" class="admininput">
        Пользователь<br>
        <input type="text"  placeholder="Новый логин" class="textarea" name="login" id="login"/>
        <input type="text"  placeholder="Новое имя" class="textarea" name="name" id="name"/>
        <input type="password"  placeholder="Новый пароль" class="textarea" name="pass" id="pass"/>
            Новая аватарка<br>
        <input type="file" class="file" name="img_upload" id="img_upload"/>
        <button class="addbutton" type="submit" id="add" name="add">Изменить пользователя</button>
    </form>
    <?php else:?>
        Данный пользователь не является админом
    <?php endif;?>
    </div>
    </div>
<div class="footer">Коппирайт с этого сайта ЗАПРЕЩЕН! Если хотите использовать информацию, то платите деньги.</div>
</body>

</html>