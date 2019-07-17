<div class="fon">
<h2 class="basket">Корзина</h2>
<?php
foreach ($gallery as $card):?>

    <h2 class="name"><?=$card['name_book']?></h2>
    <p class="author">Описание:<?=$card['author']?></p>
    <p class="price">Цена:<?=$card['price']?></p>

    <button data-id="<?= $card['id_basket']?>" class="delete">Удалить</button>

<?endforeach;?>
</div>