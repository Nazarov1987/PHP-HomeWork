<?php

require 'connection.php';

$tpl = file_get_contents('showidpic.tpl');

$id = (int)($_GET['id']);
$db = $_GET['db'];

$result = mysqli_query($mysqli, "SELECT * FROM $db WHERE id='$id'");
$sqlnewopen = "UPDATE gallery SET open = open+1 WHERE id=";

while($row = mysqli_fetch_assoc($result)) {
	$sqlresult = mysqli_query($mysqli, $sqlnewopen.$id);
	$fullimages = $row['address'].'\\\\'.$row['name'];
	$content = '<img src="'.$fullimages.'" alt="pic"/> <h3 class="add">Мировые шедевры жанра фэнтази</h3>';
	$title = 'picture id='.$id;
}
mysqli_close($mysqli);

$patterns = array('/{title}/', '/{content}/');
$replace = array($title, $content);
echo preg_replace( $patterns, $replace, $tpl );

?>