<?php

namespace app\model;

class Unit extends Model {

    public $id;
    public $name_book;
    public $author;
    public $price;


    public function __construct($nameBook, $author, $quantityBook, $price)
    {
        parent::__construct($nameBook, $author, $quantityBook, $price);
    }

    public function priceСalculation($quantity) {
        $commonPrice = (int)(($this->price/$this->quantityBook) * $quantity);
        echo "Цена {$quantity} книг серии '{$this->nameBook}' составляет {$commonPrice} рублей. <br>";
    }
}