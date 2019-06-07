<?php

namespace app\model;

class Gallery extends DbModel {

    public $id;
	public $name;
	public $address;
    public $name_book;
    public $author;
    public $price;


    public function __construct($address = null, $name = null, $author = null, $name_book = null, $price = null)
    {
		$this->address = $address;
		$this->name = $name;
		$this->author = $author;
        $this->name_book = $name_book;
        $this->price = $price;
    }


    public static function getTableName() {
        return 'gallery';
    }


}