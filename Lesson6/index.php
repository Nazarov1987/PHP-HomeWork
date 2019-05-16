<?php
// Создать калькулятор, который будет определять тип выбранной пользователем операции, ориентируясь на нажатую кнопку.

	function show_form($a, $b, $oper)
	{
		$a = intval($a);
		$b = intval($b);
		
		if ($oper == '+')
			$c = $a + $b;
		elseif ($oper == '-')
			$c = $a - $b;
		elseif ($oper == '*')
			$c = $a * $b;
		elseif ($oper == '/')
		{
			if ($b == 0)
				return 'Ошибка! Делить на 0 нельзя.';
			else
				$c = $a / $b;
		}
		else
			return 'Ошибка!';
		
		return $a .' '. $oper .' '. $b .' = '. $c;
	}

	
	if (isset($_POST['a']) && isset($_POST['b']) && isset($_POST['oper']))
		echo show_form($_POST['a'], $_POST['b'], $_POST['oper']);
?>
	
	<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Калькулятор</title>
    <link type="text/css" rel="StyleSheet" href="css/style.css" />

</head>
<body>
	<form action="" method="post">
	<input type="text" name="a" size="2" value="0">
	<input type="text" name="b" size="2" value="0"><br>
	<input type="submit" value="+" name="oper" />
	<input type="submit" value="-" name="oper" />
	<input type="submit" value="/" name="oper" />
	<input type="submit" value="*" name="oper" />
	</form>
</body>
</html>
