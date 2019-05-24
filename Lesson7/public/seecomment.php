<?php

require './connection.php';


$query = mysqli_query($mysqli, "SELECT * FROM review");
$com = [];

while($row = mysqli_fetch_assoc($query)) {
	$com[] = $row;
}

// закрываем подключение
mysqli_close($mysqli);

?>