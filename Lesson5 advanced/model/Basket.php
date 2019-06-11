<?php

namespace app\model;


class Basket extends DbModel
{
    public $id;
    public $login;
    public $name_book;
	public $quantity;
	public $price;
	
    public function __construct($login = null, $name_book = null, $quantity = null, $price = null)
    {
		$this->login = $login;
		$this->name_book = $name_book;
		$this->quantity = $quantity;
        $this->name_book = $name_book;
        $this->price = $price;
    }

    public static function getTableName() {
        return 'basket';
    }

}