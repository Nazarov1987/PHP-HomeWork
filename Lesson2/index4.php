<?php

    function mathOperation($arg1, $arg2, $operation) {
        switch ($operation){
            case 'разница':
                return 'Разница переменных равна: ' . ($arg1 - $arg2);
                break;
            case 'произведение':
                return 'Произведение переменных равно: ' . $arg1 * $arg2;
                break;
            case 'сумма':
                return 'Сумма переменных равна: ' . ($arg1 + $arg2);
                break;
        }
    }

	$br = '<br/>';
    $arg1 = mt_rand (-10,10); //позволяет создать случайное целое число от -10 до 10
    echo('arg1 равно ' . $arg1) . $br;
    
    $arg2 = mt_rand (-10,10); //позволяет создать случайное целое число от -10 до 10
    echo('arg2 равно ' . $arg2) . $br;
    
    $operation;
    
        if ($arg1 >= 0 && $arg2 >= 0) {
        $operation = 'разница';
    } if ($arg1 < 0 && $arg2 < 0) {
        $operation = 'произведение';
    } if ($arg1 < 0 && $arg2 >= 0 || $arg1 >= 0 && $arg2 < 0){
        $operation = 'сумма';
    } 
    
    echo mathOperation($arg1, $arg2, $operation);
 
   