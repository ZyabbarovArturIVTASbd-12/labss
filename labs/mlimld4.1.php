<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
        <h1>Четвертая лаба</h1>
        <form method="post" action="/script/mldm4labscripts.php">
        <textarea name="mass" placeholder="Введите матрицу смежности графа n*n" style="height: 94px; width: 161px;"></textarea><br><br>
        <input type="text" name="begin" placeholder="Начальная точка"/><br><br>
        <input type="text" name="end" placeholder="Конечная точка"/><br><br>
        <input type="submit" value="Подтвердить"><br>
        <p>Пример ввода:<br><br>
            0 0 3 0<br>
            2 0 0 0<br>
            0 7 0 1<br>
            6 0 0 0<br>
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
            if (isset($_SESSION['finalmas']) && !empty($_SESSION['finalmas'])) {
                echo '<p>'.$_SESSION['finalmas'].'</p>';
            }
            unset($_SESSION['finalmas']);
            if (isset($_SESSION['ways']) && !empty($_SESSION['ways'])) {
                echo '<p>'.$_SESSION['ways'].'</p>';
            }
            unset($_SESSION['ways']);
        ?> 
</body>
</html>