<?php

require "../engine/Autoload.php";
require "../config/config.php";

use app\model\Digital;
use app\model\Physical;
use app\model\Unit;
use app\engine\Autoload;
use app\model\Hello;

spl_autoload_register([new Autoload(), 'loadClass']);

    function vardump($var) {
        echo '<pre>';
        var_dump($var);
        echo '</pre>';
    }
$hello = new Hello();
$hello->hello();
$witcher = new Digital("Ведьмак", "Анджей Сапковский", 8, 1800);
$harryPotter = new Physical("Гарри Поттер", "Джоан Роулинг", 7, 1500);
$wolfhound = new Unit("Волкодав", "Мария Семенова", 6, 1000);

$witcher->priceСalculation(3);
$harryPotter->priceСalculation(2);
$wolfhound->priceСalculation(4);