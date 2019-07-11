<?php

namespace app\model;

class Authorization extends Model
{
    public $id;
    public $login;
    public $pass;

        public function __construct($login = null, $pass = null)
    {
        parent::__construct();
        $this->login = $login;
        $this->pass = $pass;
    }
    
    public function getTableName() {
        return 'authorization';
    }

}