<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 13.06.2019
 * Time: 0:57
 */

namespace app\controllers;

use app\model\repositories\AuthorizationRepository;

class AuthorizationController extends Controller
{
    public function actionLogin() {
        //Авторизуем пользователя
        if (isset($_POST['submit'])) {
            $login = $_POST['login'];
            $pass = $_POST['pass'];
            if (!(new AuthorizationRepository())->auth($login, $pass)) {
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