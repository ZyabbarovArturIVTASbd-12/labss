<!DOCTYPE html>
<html lang="ru">
<head> 
<link href="https://fonts.google.com/specimen/Oleo+Script+Swash+Caps" rel="stylesheet">
<meta charset="UTF-8">
<meta name = "viewport" content ="witdh=device-width">
<title>Контакты</title>
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
                    <a href="userpage.php" class="floating-button"><?=$_COOKIE['user']?></a>
                </div>
            <?php endif;?>

        </div>
</div>

<div class="content">
            <div class="me"><img src="https://i.gifer.com/4Sno.gif"></div>
            <div class="info">
            <div class="icons" >
    <a href= "https://vk.com/bardursan"><div class="icon"> <img src="https://cdn.discordapp.com/attachments/704746673917788211/972065268488626216/vk.png" ></div>    </a>
    <a href= "https://steamcommunity.com/id/bardurbliiin/"><div class="icon"> <img src="https://cdn.discordapp.com/attachments/704746673917788211/972065800041164850/steam.png" ></div>    </a>
</div>
                <div> <p class="info2" align="justify"> Телефон: 89372794755 
                    <br/> Discord: bardur#4980 
                    <br/> Почта: opaf5123@mail.ru 
                </p>
</div>
            </div>
        </div>

</tr>
</div>
<div class="panelnav1"> </div>
































<div class="footer">Коппирайт с этого сайта ЗАПРЕЩЕН! Если хотите использовать информацию, то платите деньги.</div>
</body> 
</html>