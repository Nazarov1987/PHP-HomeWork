<?php
require 'connection.php';
$mysqli = mysqli_connect($host,$user,$password,$database) 
    or die("Ошибка " . mysqli_error($mysqli));

$result = mysqli_query($mysqli, "UPDATE gallery SET view = view+1");

	 mysqli_close($mysqli);
?> 

