<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Лабораторные работы</title>
        <link rel="stylesheet" href="/styles/styles.css">
        <script type="text/javascript" src="/script/mlimd1.js"></script>
    </head>
    <body>
        <h1> Лабораторная работа №1 </h1>
        <form method="" action="">
            <table>
                <tr>
                    <td>Первый массив</td>
                    <td><input type="text" id="mass1" value="" size="50" /></td>
                </tr>
                <tr>
                    <td>Второй массив</td>
                    <td><input type="text" id="mass2" value="" size="50" /></td>
                </tr>
                <tr>
                    <td><input type="button" class="button1" value="Объединение" onclick="calculate(0);"></td>
                    <td><input type="button" class="button1" value="Симметрическая разность" onclick="calculate(1);"></td>
                </tr>
                <tr>
                    <td><input type="button" class="button1" value="Пересечение" onclick="calculate(2);"></td>
                    <td><input type="button" class="button1" value="Дополнение (A - B)" onclick="calculate(3);"></td>
                </tr>
                <tr>
                    <td><input type="button" class="button1" value="Дополнение (B - A)" onclick="calculate(4);"></td>
                </tr>
            </table>
        </form>
    <div id="outResult"></div>
    <body>
    
    </body>
    <div class="footer">Коппирайт с этого сайта ЗАПРЕЩЕН! Если хотите использовать информацию, то платите деньги.</div>
    </body>
</html>