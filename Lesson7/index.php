<?php
require 'public/db.php';

require 'templates/header.php';

require 'public/auth_check.php';

require 'templates/modal.php';

require 'templates/footer.php';
?>
 <div class="fon">
  <h1 class="text">Лучшие книги в жанре фэнтези:</h1>

    <ul class="library">
        <?php foreach($result as $image): ?>
        <li >
             <a href=./showidpic.php?id=<?=$image['id']?>&db=gallery target="_blank"><img class="book" src="<?=$image['address']?>/<?=$image['name']?>" alt=""/></a>
             <h3 class="author"> <? echo $image['author'] ?></h3>
             <h4 class="name" > <? echo $image['name_book'] ?></h4>
             <button class="buyBook">Купить</button>
             <h6 class="view" > Изображение открыто: <? echo $image['open'] ?> раз</h6>     
        </li>
        <?php endforeach;?>  
        <h3 class="see"> Страница просмотрена: <? echo $image['view'] ?> раз</h3>  
     </ul>
<hr>
  <div class="add">
       <button id="addCommit" type="button" class="ml-3 mb-3 btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Добавить комментарий
       </button>
  </div>

<?php require 'public/seecomment.php';?>

	<div class="commentUsers">
		<h3 class="add">Комментарии пользователей:</h3>
		<?php foreach($com as $review): ?>
		<h4> <? echo $review['name'] ?> </h4>
		<h5> <? echo $review['comment'] ?> </h5>
		<?php endforeach;?> 	
	</div>
</div>