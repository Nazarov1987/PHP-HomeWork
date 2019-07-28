<?php

namespace app\controllers;

use app\engine\Request;
use app\model\repositories\GalleryRepository;

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
        $gallery = (new GalleryRepository())->getLimit(0, $limit);
        echo $this->render(
            'catalog', [
                'gallery' => $gallery,
                'page' => $page
            ]
        );
    }

    public function actionCard()
    {
        $id = (new Request())->getParams()['id'];
        $gallery = (new GalleryRepository())->getOne($id);
        echo $this->render('card', ['gallery' => $gallery]);
    }
}