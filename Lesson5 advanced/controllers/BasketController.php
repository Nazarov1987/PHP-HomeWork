<?php

namespace app\controllers;

use app\model\Basket;

class BasketController extends Controller
{
    public function actionOrder() {
        $basket = Basket::getAll();
        echo $this->render('order', ['basket' => $basket]);
    }
	
    public function actionIndex()
    {
        echo $this->render('order');
    }
}