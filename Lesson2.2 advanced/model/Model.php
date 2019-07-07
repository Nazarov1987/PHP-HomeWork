<?php

namespace app\model;

use app\interfaces\IModel;

abstract class Model implements IModel
{
    protected $nameBook;
    protected $author;
    protected $quantityBook;
    protected $price;

public static $counter = 0; //Задаем счетчик

public function __construct($nameBook, $author, $quantityBook, $price) //Задаем конструктор
    {
        $this->nameBook = $nameBook;
        $this->author = $author;
        $this->quantityBook = $quantityBook;
		$this->price = $price;
        static::$counter++;
        $this->info();
    }
//Функция определения цены
abstract function priceСalculation($quantity);

public function info() { //Функция вывода информации о товаре
    echo "Номер серии в нашем каталоге - " . static::$counter . ". ";
    echo "Серия книг '{$this->nameBook}' автора {$this->author} стоит {$this->price}  рублей. <br>";
    }
}