<div class="fon">
<h2 class="basket">Корзина</h2>
<?php
foreach ($gallery as $card):?>
<div id="<?= $card['id_basket'] ?>">
    <h2 class="name"><?=$card['name_book']?></h2>
    <p class="author">Описание:<?=$card['author']?></p>
    <p class="price">Цена:<?=$card['price']?></p>

    <button data-id="<?= $card['id_basket']?>" class="delete">Удалить</button>
</div>
<?endforeach;?>
</div>

<script>

$(document).ready(function () {
        $(".delete").on('click', function () {
            var id = $(this).attr('data-id');
            $.ajax({
                url: "/basket/delete/",
                type: "POST",
                dataType: "json",
                data: {
                    id: id
                },
                error: function () {
                    alert('error');
                },
                success: function (answer) {
                    {
                        $("#" + id).remove();
                        $("#count").html(answer.count);
                    }
                }

            })
        });

    });

</script>
