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
        $page = $_GET['page'] ?? 0;
        $page++;
        $limit = $page * 3;
        $gallery = Gallery::getLimit(0, $limit);
        echo $this->render(
            'catalog', [
                'gallery' => $gallery,
                'page' => $page
            ]
        );
    }

    public function actionCard()
    {
        $id = $_GET['id'];
        $gallery = Gallery::getOne($id);
        echo $this->render('card', ['gallery' => $gallery]);
    }
}