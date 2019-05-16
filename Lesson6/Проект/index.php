<?php

require 'db.php';

require 'templates/header.php';

require 'public/index-main.php';

require 'templates/modal.php';

require 'templates/footer.php';
?>


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


<button type="button" class="ml-3 mb-3 btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Добавить комментарий
</button>


<? var_dump($_POST);?> 