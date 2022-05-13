<!DOCTYPE html>
<html>
<head>
    <title>Лабораторная работа №4</title>
    <link rel = "stylesheet" href = "/styles/styles.css">
</head>
<body>

<form method="post">
    <textarea style = "width: 200px; height: 100px;" id="matr" placeholder="Введите матрицу" name = 'matrix'><?=$_POST['matrix']?></textarea><br>
    Начало в:
    <input style = "width: 150px;" type = 'text' name = 'nach'  value = '<?= $_POST[nach]?>'>
    <br>Конец в:&nbsp&nbsp
    <input style = "width: 149px;" type = 'text' name = 'kon'  value = '<?= $_POST[kon]?>'>
    <br>
    <input type = 'submit' value="Найти">
    <h3>Пример ввода:</h3>
    <p>
        0 20 5<br>
        20 0 7<br>
        5 7 0<br>
        Начало в: вершина от которой вы хотите начать путь(в данном случае от 1 до 3)<br>
        Конец в: вершина до которой хотите проложить путь
        ОТВЕТ ДЛЯ ПРИМЕРА:1,3. 5
    </p>

</form>
<?php
$nach = $_POST[nach] - 1;
$kon = $_POST[kon] - 1;
$optimal[0] = $kon;
$count = 0;
$matrix = explode("\r\n", $_POST[matrix]);
for($i = 0; $i < count($matrix); $i++) {
    $matrix[$i] = explode(" ", $matrix[$i]);
    if (count($matrix) != count($matrix[$i]) or count($matrix[0]) != count($matrix[$i])) {
        die('Матрица введена неверно');
    }
}
for ($i = 0; $i < count($matrix); $i++) {
    for ($j = 0; $j < count($matrix[$i]); $j++) {
        if($matrix[$i][$j] === '0') {
            $matrix[$i][$j] = INF;
        }
    }
}
for ($i = 0; $i < count($matrix); $i++) {
    $way[$i] = INF;
}
$node[0] = 0;
$minnode = $nach;
$node[0] = $minnode;
$way[$minnode] = 0;
while ($minnode != -1) {
    for ($i = 0; $i < count($matrix); $i++) {
        if (array_search($i, $node) == false) { 
            $ws = $way[$minnode] + $matrix[$minnode][$i];
            if ($ws < $way[$i]) {
                $way[$i] = $ws;
                $allnodes[$i] = $minnode;
            }
        }
    }
    $minnode = -1;
    $minway = INF;
    for ($i = 0; $i < count($matrix); $i++)  {
        $bool = true;
        for ($j = 0; $j < count($node); $j++) {
            if ($i == $node[$j]) {
                $bool = false;
            }
        }
        if ($bool) {
            if ($way[$i] < $minway) {
                $minway = $way[$i];
                $minnode = $i;
            }
        }
    }
    if ($minnode >= 0) {
        array_push($node, $minnode);
    }
}
while ($kon != $nach) {
    $kon = $allnodes[$optimal[$count]];
    $count++;
    array_push($optimal, $kon);
}
echo('Ввели: <br>');
for ($i = 0; $i < count($matrix); $i++) {
    for ($j = 0; $j < count($matrix); $j++) {
        if($matrix[$i][$j] === INF) {
            $matrix[$i][$j] = '0';
        }
        echo($matrix[$i][$j].' ');
    }
    echo("<br>");
}
echo('<br>');
echo('Путь из ' . ($nach + 1) . ' вершины в ' . $_POST[kon] . ' проходит через: ');
for ($i = count($optimal)-1; $i >= 0; $i--) {
    if ($i == 0) {
        echo ($optimal[$i]+1);
    }
    else {
        echo ($optimal[$i]+1) . ', ';
    }
}
echo(' и равно: ' . $way[$_POST[kon]-1]);
?>
</body>
</html>