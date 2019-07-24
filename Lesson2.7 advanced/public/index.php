<?php
session_start();
require "../engine/Autoload.php";
require "../config/config.php";

use app\model\Gallery;
use app\engine\Autoload;
use app\model\repositories\AuthorizationRepository;
use app\model\Basket;
use app\engine\Render;
use app\engine\Request;

try {
spl_autoload_register([new Autoload(), 'loadClass']);

$request = new Request();

$controllerName = $request->getControllerName() ?: 'gallery';
$actionName = $request->getActionName();

$controllerClass = CONTROLLER_NAMESPACE . ucfirst($controllerName) . "Controller";

if (class_exists($controllerClass)) {
    $controller = new $controllerClass(new Render());
    $controller->runAction($actionName);
} else {
    echo "404";

	}
}catch (\PDOException $e) {
    var_dump($e);
}

catch (\Exception $e) {
    echo $e->getMessage();
    var_dump($e->getTrace());
}
/** @var Products $product */

$authorization = (new AuthorizationRepository())->getAll();
//vardump($authorization);

//$gallery->delete();

//$gallery = new Gallery("./img", "image7.jpg", "'Stiven King'", "Dark Tower", 1550);
//$gallery->insert();
//vardump($gallery);

