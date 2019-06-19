
 <div class="fon">
  <h1 class="text">Лучшие книги в жанре фэнтези:</h1>
    <ul class="library">
        <?php foreach($gallery as $image): ?>
        <li >
             <a href="/gallery/card/?id=<? echo $image['id'] ?>"><img class="book" src="/<? echo $image['address']?>/<? echo $image['name']?>"/></a>
             <h3 class="author"> <? echo $image['author'] ?></h3>
             <h4 class="name" > <? echo $image['name_book'] ?></h4>
             <p class="price">Стоимость: <? echo $image['price']?></p>
             <button data-id="<?=$image['id']?>"  class="action">Купить</button>
        </li>
        <?php endforeach;?>
        <div class="still"><a href="?c=gallery&a=catalog&page=<?=$page?>">Еще ...</a> </div>
     </ul>
</div>

<script>
    $(document).ready(function(){
        $(".action").on('click', function(){
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