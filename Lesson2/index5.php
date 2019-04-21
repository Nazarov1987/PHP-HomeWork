<?php

 function power($val, $pow)
 {
     if($pow != 1){
         return $val * power($val, $pow - 1);
 }else
 {
     return $val;
 }
 } 

 $br = '<br/>';   
 $val = mt_rand (1,10); //позволяет создать случайное целое число от 1 до 10
    echo('val равно ' . $val) . $br;    

 $pow = mt_rand (1,5); //позволяет создать случайное целое число от 2 до 5
    echo('pow равно ' . $pow) . $br; 

  echo 'Возведение переменных в степень равно: ' . power($val, $pow);
