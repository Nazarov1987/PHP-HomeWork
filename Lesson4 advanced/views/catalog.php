
 <div class="fon">
  <h1 class="text">Лучшие книги в жанре фэнтези:</h1>

    <ul class="library">
        <?php foreach($gallery as $image): ?>
        <li >
             <img src="../public/img/<? echo $image['address']?>/<? echo $image['name']?>" class="pimg" />
             <h3 class="author"> <? echo $image['author'] ?></h3>
             <h4 class="name" > <? echo $image['name_book'] ?></h4>
             <p class="price">Стоимость: <? echo $image['price']?></p>
             <button class="buyBook">Купить</button>
        </li>
        <?php endforeach;?>  
     </ul>
<hr>
</div>