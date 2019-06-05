<?php

require "../engine/Autoload.php";
require "../config/config.php";

use app\model\Gallery;
use app\engine\Autoload;
use app\model\Authorization;

spl_autoload_register([new Autoload(), 'loadClass']);

    function vardump($var) {
        echo '<pre>';
        var_dump($var);
        echo '</pre>';
    }

$gallery = new Gallery();

//vardump($gallery->getAll());

$authorization = new Authorization();

vardump($authorization->getAll());

$gallery = new Gallery("Песнь льда и Пламени", "Д. Мартин", 1550);
$gallery->insert();

vardump($gallery->getAll());