<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link type="text/css" rel="stylesheet" href="/css/mainstyle.css">
    <title>Document</title>
</head>
<body>

<div class="header">
<a href="/">Главная</a>
<a href="/gallery/catalog/">Каталог</a>
<a href="/basket">Корзина</a> <span id="count"><?=$count?></span>

<?if ($auth):?>
    Добро пожаловать <?=$username?> <a href="/user/logout/"> [Выход]</a>
<?else:?>
    <form action="/user/login/" method="post">
        <input type="text" name="login" placeholder="Логин">
        <input type="text" name="pass" placeholder="Пароль">
        <input type="submit" name="submit" value="Войти">
    </form>
<?endif;?>

<br>
<a href="/twig.php">Пользователи</a>
</div>
<br>
<?=$content?>
</body>
</html>