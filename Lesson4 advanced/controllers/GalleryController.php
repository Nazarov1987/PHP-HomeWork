<?php

namespace app\controllers;

use app\model\Gallery;

class GalleryController extends Controller
{
	 public function actionIndex()
    {
        echo $this->render('index');
    }
	
    public function actionCatalog() {
        $gallery = Gallery::getAll();
        echo $this->render('catalog', ['gallery' => $gallery]);
    }

    public function actionCard()
    {
        $id = $_GET['id'];
        $gallery = Gallery::getOne($id);
        echo $this->render('card', ['gallery' => $gallery]);
    }
}