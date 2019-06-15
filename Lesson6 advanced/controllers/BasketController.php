<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12.06.2019
 * Time: 23:37
 */

namespace app\controllers;

use app\engine\Request;
use app\model\Basket;

class BasketController extends Controller
{

    public function actionAddBasket() {

        (new Basket(session_id(),(new Request())->getParams()['id']))->save();

        $count = Basket::getCountWhere('session_id', session_id());


        $response = [
            'result' => 1,
            'count' => $count
        ];
        header('Content-Type: application/json');
        echo json_encode($response);
    }

    public function actionIndex()
    {
        echo $this->render('basket', [
            'gallery' => Basket::getBasket(session_id())]);
    }
}