<?php

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
}