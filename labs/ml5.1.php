<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
        <h1>Пятая лаба</h1>
        <form method="post" action="/script/ml5.php">
        <textarea name="mass" placeholder="Введите матрицу смежности графа n*n" style="height: 94px; width: 161px;"></textarea><br><br>
        <input type="submit" value="Подтвердить"><br>
        <p>Пример ввода:<br><br>
            0 1 1<br>
            0 0 1<br>
            0 0 0<br>
        </p>
        </form>
        <?php 
            if (isset($_SESSION['error_text']) && !empty($_SESSION['error_text'])) {
                echo '<p> Ошибка: '.$_SESSION['error_text'].'</p>';
            }
            unset($_SESSION['error_text']);
            if (isset($_SESSION['mas']) && !empty($_SESSION['mas'])) {
                echo '<p>'.$_SESSION['mas'].'</p>';
            }
            unset($_SESSION['mas']);
        ?> 
</body>
</html>