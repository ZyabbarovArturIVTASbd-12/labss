<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Лабораторная работа №3</title>
    <link rel = "stylesheet" href = "/styles/styles.css">
</head>
<body >
        <form action="" method="post">
            <p style="font-size: 18px;">Первое множество: <input type="text" name="mnoj1" value="<?php
                if (isset($_POST['mnoj1'])) {
                    echo $_POST['mnoj1'];
                }?>">
                <br>Второе множество: <input type="text" name="mnoj2" value="<?php
                if (isset($_POST['mnoj2'])) {
                    echo $_POST['mnoj2'];
                }?>">
                <br>Отношение: <input type="text" name="otnosh" value="<?php
                if (isset($_POST['otnosh'])) {
                    echo $_POST['otnosh'];
                }?>">
                <br><input type="submit" name="sub" value="Анализ"><br>
        </form>
        <?php
        ini_set('display_errors', 'Off');
        if (isset($_POST['sub'])) {
            $indikator = 0;
            $error1 = 0;
            $error2 = 0;
            $otnosh = explode(',', $_POST['otnosh']);
            $mnoj1 = explode(',', $_POST['mnoj1']);
            $mnoj2 = explode(',', $_POST['mnoj2']);
            $dlinaotn = count($otnosh);
            $dlina1 = count($mnoj1);
            $dlina2 = count($mnoj2);
            for($i = 0; $i<$dlina1; $i++){
                for($j = 0; $j<$dlina1; $j++){
                    if($i != $j){
                        if($mnoj1[$i] == $mnoj1[$j]){
                            echo 'Вы ввели несколько одинаковых элементов в первом множестве';
                            echo "<br>";
                            $error1 = 1;
                            break;
                        }
                    }
                }
                if($error1 == 1){
                    break;
                }
            }
            for($i = 0; $i<$dlina2; $i++){
                for($j = 0; $j<$dlina2; $j++){
                    if($i != $j){
                        if($mnoj2[$i] == $mnoj2[$j]){
                            echo 'Вы ввели несколько одинаковых элементов во втором множестве';
                            echo "<br>";
                            $error2 = 1;
                            break;
                        }
                    }
                }
                if($error2 == 1){
                    break;
                }
            }
            $error4 = 0;
            $match = 0;
            for($i = 0; $i<$dlinaotn; $i++){
                if($error4 == 0){
                    if($i % 2 == 0){
                        for($j = 0; $j<$dlina1; $j++){
                            if($otnosh[$i]==$mnoj1[$j]){
                                $match = $match + 1;
                            }
                        }
                    }
                }
            }
           if($match < $dlina1){
                $error4 = 1;
                echo 'Отношение не является функцией.';
                echo "<br>";
            }
            $error3 = 0;
            for($i = 0; $i<$dlinaotn; $i++){
                if($error3 == 0){
                    for($j = 0; $j<$dlinaotn; $j++){
                        if($error3 == 0){
                            if($i != $j){
                                if($i % 2 == 0){
                                    if($otnosh[$i] == $otnosh[$j]){
                                        if($otnosh[$i + 1] != $otnosh[$j + 1]){
                                            echo 'Отношение не является функцией.';
                                            echo "<br>";
                                            $error3 = 1;
                                            break;
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
            if($error1 == 0){
                if($error2 == 0){
                    if($error3 == 0){
                        if($error4 == 0){
                            echo 'Отношение является функцией';
                        }
                    }
                }
            }
        }
        ?>
<div class ="poyasnenie">
    <p><h3>Пояснение:</h3></p>
    <p>
        Каждый элемент НУЖНО вводить через запятую <br>
        В поле ввода не должно быть пробелов <br>



    </p>
</div>
<div class="primer">
    <p><h3>Пример ввода:</h3></p>
    <p>
        Первое множество: d,a,f <br>
        Второе множество: 5,3,1 <br>
        Отношение: a,1,d,3,f,5

    </p>
</div>
</body>
</html>