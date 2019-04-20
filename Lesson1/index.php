<?php

/* Задиние  1*/
$a = 5;
$b = '05';

var_dump($a == $b); // К переменной $b срабатывает приведение к типу число, и соответственно 5 == 5 - это true
var_dump((int)'012345'); // Приведение строки к числу (integer)
var_dump((float)123.0 === (int)123.0);	// Сравнение по типам и значениям float (123.0) число с плавающей точкой, int (123) целое цисло
var_dump((int)0 === (int)'hello, world'); // Приведение 'hello, world'к целому чило даст 0, 0=0 это true

/* Задиние  3*/
$a = 5; // Поменять значение переменных
$b = 2;

$a=$a+$b-$b=$a;
echo ("$a");
echo ("$b");

/* Задиние  2 */
$a = 'Здравствуйте,';
$b = ' Я выполнил первое домашнее задание.';
$today = getDate();
$d = $today['mday'];
$m = $today['mon'];
$y = $today['year'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<h1> <?=$a?> <?=$b?> Дата: <?=$d?> <?=$m?> <?=$y?> год. </h1>	
</body>
</html>


