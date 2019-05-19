<?php

require '../connection.php';

$name = $_POST['name'];
$comment = $_POST['comment'];
$name = htmlspecialchars($name);
$comment = htmlspecialchars($comment);

$mysqli->query("INSERT INTO `review` (`name`, `comment`) VALUES ('$name', '$comment')");



header('Location: ../index.php');

die;