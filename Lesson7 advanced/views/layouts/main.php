<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="/css/style.css">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>

<div class="header">
<a href="/">Главная</a>
<a href="/gallery/catalog/">Каталог</a>
<a href="/basket">Корзина <span id="count"><?=$count?></span></a> 
<a href="/twig.php">Пользователи</a>
<br>
<div class="authUser">
<?if ($auth):?>
    Вы вошли как <?=$username?> <a href="/authorization/logout/"> [Выход]</a>
<?else:?>
</div>
    <form action="/authorization/login/" method="post" class="authForm">
        <input type="text" name="login" placeholder="Логин">
        <input type="text" name="pass" placeholder="Пароль">
        <input type="submit" name="submit" value="Войти">
    </form>
<?endif;?>
</div>
<br>
<?=$content?>
</body>
</html>