<?php

require './connection.php';

$query = mysqli_query($mysqli, "SELECT * FROM gallery ORDER BY gallery.open DESC");
$sqlnewview = "UPDATE gallery SET view = view+1 WHERE id=";

$result = [];

while($row = mysqli_fetch_assoc($query)) {
	$sqlres = mysqli_query($mysqli, $sqlnewview.$row["id"]);
	$result[] = $row;
}

// закрываем подключение
mysqli_close($mysqli);

?>