    <?php

    $a = mt_rand (1,15); //позволяет создать случайное целое число от 1 до 15
    $br = '<br/>';

    switch($a){ //выводит числа от $a до 15
        case 1:
        echo('1') . $br;
        case 2:
        echo('2') . $br;
        case 3:
        echo('3') . $br;
        case 4:
        echo('4') . $br;
        case 5:
        echo('5') . $br;
        case 6:
        echo('6') . $br;        
        case 7:
        echo('7') . $br;
        case 8:
        echo('8') . $br;
        case 9:
        echo('9') . $br;
        case 10:
        echo('10') . $br;
        case 11:
        echo('11') . $br;
        case 12:
        echo('12') . $br;        
        case 13:
        echo('13') . $br;
        case 14:
        echo('14') . $br;
        case 15:
        echo('15') . $br;
        default:
        echo('Конец');
    }