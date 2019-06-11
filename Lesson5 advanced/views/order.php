<?php
/** @var \app\model\Basket $basket  */
?>

<h2> В корзине находятся следующие товары: </h2>
<h2 class="name"><?=$basket->login?></h2>
<p class="author"><?=$basket->name_book?></p>
<p class="author">В количестве: <?=$basket->quantity?></p>
<p>Стоимость: <?=$basket->price?></p>