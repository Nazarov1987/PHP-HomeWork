<?php

/* 1. Создать галерею фотографий. Она должна состоять из одной страницы, на которой пользователь видит все картинки в уменьшенном виде. При клике на фотографию она должна открыться в браузере в новой вкладке. Размер картинок можно ограничивать с помощью свойства width.*/

$directory = "./img";    // Папка с изображениями

    $images = [ 
        'image1.jpg',
        'image2.jpg',
        'image3.jpg',
        'image4.jpg',
        'image5.jpg',
		'image6.jpg'
    ]; // Массив с названиями изображениями

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link type="text/css" rel="StyleSheet" href="css/style.css" />
</head>
<body>
   <h1 class="text">Лучшие книги в жанре фэнтази:</h1>
    <ul class="library">
        <?php foreach($images as $key=>$image): ?>
        <li>
             <a href="<?=$directory?>/<?=$image?>"><img class="book" src="<?=$directory?>/<?=$image?>" alt=""/></a>
        </li>
        <?php if(++$key % 2==0): ?>
                <?php endif; ?>
        <?php endforeach; ?>
        </ul>
</body>
</html>
    
