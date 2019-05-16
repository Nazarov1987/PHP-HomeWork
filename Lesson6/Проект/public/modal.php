<?php

require './db.php';

if ($_POST && $_POST['name'] && $_POST['comment']) {
    $name = $_POST['name'];
    $comment = $_POST['comment'];
}

$INSERT_query = sprintf("INSERT INTO nazarov.review (name, comment) VALUES (\"%s\", \"%s\")", $name, $comment);

die;