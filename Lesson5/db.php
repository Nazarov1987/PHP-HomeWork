<?php

require 'connection.php';

$mysqli = mysqli_connect($host,$user,$password,$database) 
    or die("Ошибка " . mysqli_error($mysqli));

$query = mysqli_query($mysqli, "SELECT * FROM gallery ORDER BY gallery.view ASC");

$result = [];

while($row = mysqli_fetch_assoc($query)) {
	$result[] = $row;
}

// закрываем подключение
mysqli_close($mysqli);

?>