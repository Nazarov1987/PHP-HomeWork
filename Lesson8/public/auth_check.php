<?php

if ($_SESSION['auth']): ?>
<h5 class="m-3 alert-success"><?=$_SESSION['user_name']?>, добро пожаловать!</h5>

<?php else: ?>

<h5 class="m-3 alert alert-danger">Доступ к контенту ограничен. <a href="/templates/login.php">Войдите</a>, чтобы продолжить</h5>

<? die;
endif;

?>