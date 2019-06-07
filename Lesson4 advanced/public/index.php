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
$controllerName = $_GET['c'] ?: 'gallery';
$actionName = $_GET['a'];

$controllerClass = CONTROLLER_NAMESPACE . ucfirst($controllerName) . "Controller";
if (class_exists($controllerClass)) {
    $controller = new $controllerClass();
    $controller->runAction($actionName);
} else {
    echo "404";
}
/** @var Products $product */

//$gallery = Gallery::getAll();
//vardump($gallery);

//$gallery->delete();

//$gallery = new Gallery("./img", "image7.jpg", "'Stiven King'", "Dark Tower", 1550);
//$gallery->insert();
//vardump($gallery);
