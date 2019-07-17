<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 13.06.2019
 * Time: 0:57
 */

namespace app\controllers;

use app\model\Authorization;

class AuthorizationController extends Controller
{
    public function actionUsers() {
        $authorization = Authorization::getAll();
        echo $this->render('users', ['authorization' => $authorization]);
    }
    public function actionIndex()
    {
        echo $this->render('users');
    }
    public function actionLogin() {
        //Авторизуем пользователя
        if (isset($_POST['submit'])) {
            $login = $_POST['login'];
            $pass = $_POST['pass'];
            if (!Authorization::auth($login, $pass)) {
                Die("Не верный пароль!");
            } else
                header("Location: /");
            exit();
        }
    }
    public function actionLogout() {
        session_destroy();
        header("Location: /");
        exit();
    }
}