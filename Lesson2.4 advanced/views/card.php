<?php
/** @var \app\model\Gallery $gallery  */
?>
<div class="fon">
<img class="bookBig" src="/<? echo $gallery->address?>/<? echo $gallery->name?>"/>
<h2 class="name"><?=$gallery->name_book?></h2>
<p class="author"><?=$gallery->author?></p>
<p class="price">Стоимость: <?=$gallery->price?></p>
</div>

