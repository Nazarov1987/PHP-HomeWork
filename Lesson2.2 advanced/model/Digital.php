<?php

namespace app\model;

class Digital extends Model {
    public $id;
    public $name_book;
    public $author;
    public $price;


    public function __construct($nameBook, $author, $quantityBook, $price)
    {
        parent::__construct($nameBook, $author, $quantityBook, $price);
    }

    public function priceСalculation($quantity) {
        $commonPrice = ($this->price * $quantity)/2;
        echo "Цена {$quantity} серий '{$this->nameBook}' в цифровом виде составляет {$commonPrice} рублей. <br>";
    }
}