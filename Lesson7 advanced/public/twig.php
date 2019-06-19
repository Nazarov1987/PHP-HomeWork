<?php
session_start();
require_once '../vendor/autoload.php';
require_once '../views/layouts/main.php';
require_once 'index.php';

use app\model\Authorization;


$loader = new \Twig\Loader\FilesystemLoader('../twigtemplates');
$twig = new \Twig\Environment($loader);
//var_dump($authorization);
echo $twig->render('index.twig', ['authorization' => $authorization]);