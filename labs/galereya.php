<!DOCTYPE html>
<html lang="ru">
<head> 
<link href="https://fonts.google.com/specimen/Oleo+Script+Swash+Caps" rel="stylesheet">
<meta charset="UTF-8">
<meta name = "viewport" content ="witdh=device-width">
<title>Галерея</title>
<link rel="stylesheet" href="styles/styles.css">
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


<a href="registr.php" class="floating-button">Регистрация</a></td>
            <a href="auto.php" class="floating-button">Вход</a></td>

            </a>
            <?php else:?>
                <div>
                    <a href="exit.php" class="floating-button">Выход</a>
                    <a href="userpage.php" class="floating-button"><?=$_COOKIE['user']?></a>
                </div>
            <?php endif;?>

        </div>
</div>
<div class="gallery">
        <div class="buttonGallery1" onclick="LeftClickImage()"> <img src="/images/levo.jpg"> </div>
        <div id="MainImage">
        
        </div>
        <div class="buttonGallery2" onclick="RightClickImage()"> <img src="/images/pravo.jpg"> </div>

</div>
</div>
</tr>

<div class="panelnav1"> </div>


























<div class="footer">Коппирайт с этого сайта ЗАПРЕЩЕН! Если хотите использовать информацию, то платите деньги.</div>

</body> 
</html>