<?php

require 'connection.php';

$mysqli = mysqli_connect($host,$user,$password,$database) 
    or die("Ошибка " . mysqli_error($mysqli));


?>