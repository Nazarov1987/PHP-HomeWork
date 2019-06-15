<?php
/** @var \app\model\Gallery $gallery  */
?>
<div class="fon">
<img class="bookBig" src="/<? echo $gallery->address?>/<? echo $gallery->name?>"/>
<h2 class="name"><?=$gallery->name_book?></h2>
<p class="author"><?=$gallery->author?></p>
<p class="price">Стоимость: <?=$gallery->price?></p>
<button data-id="<?=$image['id']?>"  class="action_one">Купить</button>
</div>

<script>
    $(document).ready(function(){
        $(".action_one").on('click', function(){
            let id = $(this).attr('data-id');
            console.log(id);
            $.ajax({
                url: "/basket/AddBasket/",
                type: "POST",
                dataType : "json",
                data:{
                    id: id
                },
                error: function() {alert('error');},
                success: function(answer){
                    {
                        $("#count").html(answer.count);
                    }
                }

            })
        });

    });
</script>