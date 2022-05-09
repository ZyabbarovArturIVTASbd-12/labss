<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма регистрации</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <div class="container mt-4">
        <?php
            if($_COOKIE['user'] == ''):
        ?>
        <div class="row">
            <div class="col">
            <h1>Форма регистрации</h1>
            <form action="check.php" method="post" enctype="multipart/form-data">
            <input type="text" class="form-control" name="login"
            id="login" placeholder="Введите логин"><br>
            <input type="text" class="form-control" name="name"
            id="name" placeholder="Введите имя"><br>
            <input type="password" class="form-control" name="pass"
            id="pass" placeholder="Введите пароль"><br>
            <input type="file" name="img_upload"
            id="img_upload">
            <button class="btn btn-success" type="submit">Зарегистрировать</button>
            </form>
            </div>
            <div class="col">
            <h1>Форма авторизации</h1>
            <form action="auth.php" method="post">
            <input type="text" class="form-control" name="login"
            id="login" placeholder="Введите логин"><br>
            
            <input type="password" class="form-control" name="pass"
            id="pass" placeholder="Введите пароль"><br>
            <button class="btn btn-success" type="submit">Авторизоваться</button>
            </form>
        </div>
    <?php else:?>
        <p> Привет <?=$_COOKIE['user']?>. Чтобы выйти нажмите здесь <a href="/exit.php"> здесь </a> </p>
    
    <?php endif;?>
    </div>
</body>
</html>