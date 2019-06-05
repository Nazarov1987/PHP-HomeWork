<?php

namespace app\model;

class Gallery extends Model {

    public $id;
    public $name_book;
    public $author;
    public $price;


    public function __construct($name_book = null, $author = null, $price = null)
    {
        parent::__construct();
        $this->name_book = $name_book;
        $this->author = $author;
        $this->price = $price;
    }


    public function getTableName() {
        return 'gallery';
    }



}