<?php

/* 1. Создать галерею фотографий. Она должна состоять из одной страницы, на которой пользователь видит все картинки в уменьшенном виде. При клике на фотографию она должна открыться в браузере в новой вкладке. Размер картинок можно ограничивать с помощью свойства width.*/
$author = file("./text/1.txt");
$name = file("./text/2.txt");
/* Функция для удаления лишних файлов: сюда, помимо удаления текущей и родительской директории, так же можно добавить файлы, не являющиеся картинкой (проверяя расширение) */
  function excess($files) {
    $result = array();
    for ($i = 0; $i < count($files); $i++) {
      if ($files[$i] != "." && $files[$i] != "..") $result[] = $files[$i];
    }
    return $result;
  }

$dir = "./img"; // Путь к директории, в которой лежат изображения   
$files = scandir($dir); // Получаем список файлов из этой директории
$files = excess($files); // Удаляем лишние файлы
/* Дальше происходит вывод изображений на страницу сайта */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link type="text/css" rel="StyleSheet" href="css/style.css" />
</head>
<body>
   <h1 class="text">The best books in the genre of fantasy:</h1>
    <ul class="library">
        <?php for ($i = 0; $i < count($files); $i++): ?>
        <li >
             <a href="<?=$dir?>/<?=$files[$i]?>"><img class="book" src="<?=$dir?>/<?=$files[$i]?>" alt=""/></a>             
             <h3 class="author"> <? echo $author[$i] ?></h3>
             <h4 class="name" > <? echo $name[$i] ?></h4> 
        </li>

        <?php endfor; ?>
                
        </ul>
</body>
</html>