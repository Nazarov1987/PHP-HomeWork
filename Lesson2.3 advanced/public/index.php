<?php

require "../engine/Autoload.php";
require "../config/config.php";

use app\model\Gallery;
use app\engine\Autoload;

spl_autoload_register([new Autoload(), 'loadClass']);

    function vardump($var) {
        echo '<pre>';
        var_dump($var);
        echo '</pre>';
    }

$gallery = new Gallery();
$gallery=$gallery->getAll();

require_once '../vendor/autoload.php';
$loader = new Twig_Loader_Filesystem('../twigtemplates');
  // инициализируем Twig
$twig = new Twig_Environment($loader);
echo $twig->render('index.twig', ['gallery' => $gallery]);
