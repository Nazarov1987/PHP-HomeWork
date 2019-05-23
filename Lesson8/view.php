<?php
require 'connection.php';
$mysqli = mysqli_connect($host,$user,$password,$database) 
    or die("Ошибка " . mysqli_error($mysqli));

$result = mysqli_query($mysqli, "UPDATE gallery SET view = view+1");

	 mysqli_close($mysqli);
?> 

<div>
	<h3>Комментарии пользователей:</h3>
	<?php foreach($com as $review): ?>
	<h4> <? echo $review['name'] ?> </h4>
	<h5> <? echo $review['comment'] ?> </h5>
	<?php endforeach;?> 	
</div>