<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 15.06.2019
 * Time: 16:54
 */

namespace app\model\repositories;


use app\model\Repository;
use app\model\entities\Basket;

class BasketRepository extends Repository
{

	public function getBasket($session) {
    	$sql = "SELECT p.id id_prod, b.id id_basket, p.name_book, p.author, p.price FROM basket b,gallery p WHERE b.product_id=p.id AND session_id = :session";
        return $this->db->queryAll($sql, ['session' => $session]);
    }

    public function getEntityClass()
    {
        return Basket::class;
    }

    public function getTableName() {
        return 'basket';
    }
}