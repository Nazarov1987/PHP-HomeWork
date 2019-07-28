<div class="fon">
<h2 class="best"> Наши лучшие пользователи:</h2>
        <?php foreach($authorization as $user): ?>
            <h3 class="login"> <? echo $user['login'] ?></h3>
        <?php endforeach;?>
</div>