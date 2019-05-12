<?php
require 'db.php';
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
        <?php foreach($result as $image): ?>
        <li >
             <a href="./<?=$image['address']?>/<?=$image['name']?>" target="_blank"><img class="book" src="<?=$image['address']?>/<?=$image['name']?>" alt=""/></a>
             <h3 class="author"> <? echo $image['author'] ?></h3>
             <h4 class="name" > <? echo $image['name_book'] ?></h4>
             <h5 class="view" > Изображение просмотрено: <? echo $image['view'] ?> раз</h5>    
        </li>
        <?php endforeach;?>    
     </ul>
</body>
</html>