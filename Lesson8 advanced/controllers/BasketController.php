<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12.06.2019
 * Time: 23:37
 */

namespace app\controllers;

use app\engine\Request;
use app\model\entities\Basket;
use app\model\repositories\BasketRepository;

class BasketController extends Controller
{
	 public function actionDelete()
    {
        $id = (new Request())->getParams()['id'];
        $basket = (new BasketRepository())->getOne($id);
		 
		if (session_id() == $basket->session_id)  { 
		(new BasketRepository())->delete($basket);
		$count = (new BasketRepository())->getCountWhere('session_id', session_id());
		echo json_encode(['response' => 1, 'count' => $count]);	
		} else {
            echo json_encode(['response' => 0]);
        }
	}

    public function actionAddBasket() {

        $id = (new Request())->getParams()['id'];
        $basket = new Basket(session_id(), $id);
        (new BasketRepository())->save($basket);

        $count = (new BasketRepository())->getCountWhere('session_id', session_id());


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
            'gallery' => (new BasketRepository())->getBasket(session_id())]);
    }
}