<!DOCTYPE html>
<html lang="ru">
<head> 
<link href="https://fonts.google.com/specimen/Oleo+Script+Swash+Caps" rel="stylesheet">
<meta charset="UTF-8">
<meta name = "viewport" content ="witdh=device-width">
<title>Моя любимая игра</title>
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
</div>
<div class="content">
            <div class="me"><img src="/images/xio.jpg"></div>
            <div class="info">
                
                <p class="info2" align="justify"> Моя любимая игра это геншин инпакт. Я люблю в нее играть всегда.
                </p>
            </div>
        </div>

</tr>
</div>

<div class="panelnav1"> </div>


























<div class="footer">Коппирайт с этого сайта ЗАПРЕЩЕН! Если хотите использовать информацию, то платите деньги.</div>
</body> 
</html>