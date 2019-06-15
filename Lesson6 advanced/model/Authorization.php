<?php

namespace app\model;

class Authorization extends DbModel
{
    public $id;
    public $login;
    public $pass;

 /**
     * Authorization constructor.
     * @param $login
     * @param $pass
     */
    public function __construct($login = null, $pass = null)
    {
        $this->login = $login;
        $this->pass = $pass;
    }
    
	public static function auth($login, $pass) {
        $user = static::getOneWhere('login', $login);
var_dump($user);

        if ($pass == $user->pass) {
            $_SESSION['login'] = $login;
            return true;
        }
        return false;

    }

    public static function isAuth() {
        return isset($_SESSION['login']) ? true: false;
    }

    public static function getName() {
        return static::isAuth() ? $_SESSION['login'] : "Guest";
    }
    public static function getTableName() {
        return 'authorization';
    }

}