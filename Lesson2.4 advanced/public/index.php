<?php

require "../engine/Autoload.php";
require "../config/config.php";

use app\model\Gallery;
use app\engine\Autoload;
use app\model\Authorization;
use app\model\Basket;
use app\engine\Render;

spl_autoload_register([new Autoload(), 'loadClass']);

$controllerName = $_GET['c'] ?: 'gallery';
$actionName = $_GET['a'];

$controllerClass = CONTROLLER_NAMESPACE . ucfirst($controllerName) . "Controller";
if (class_exists($controllerClass)) {
    $controller = new $controllerClass(new Render());
    $controller->runAction($actionName);
} else {
    echo "404";
}
/** @var Products $product */

//$authorization = Authorization::getAll();
//vardump($authorization);

//$gallery->delete();

//$gallery = new Gallery("./img", "image7.jpg", "'Stiven King'", "Dark Tower", 1550);
//$gallery->insert();
//vardump($gallery);
