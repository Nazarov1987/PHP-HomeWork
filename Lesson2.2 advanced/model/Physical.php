<?php

namespace app\model;

class Physical extends Model {

    public $id;
    public $name_book;
    public $author;
    public $price;


    public function __construct($nameBook, $author, $quantityBook, $price)
    {
        parent::__construct($nameBook, $author, $quantityBook, $price);
    }

    public function priceСalculation($quantity) {
        $commonPrice = ($this->price * $quantity);
        echo "Цена {$quantity} серий '{$this->nameBook}' в бумажном виде составляет {$commonPrice} рублей. <br>";
    }
}