<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 15.06.2019
 * Time: 16:59
 */

namespace app\model\repositories;

use app\model\Repository;
use app\model\entities\Gallery;

class GalleryRepository extends Repository
{

    public function getEntityClass()
    {
        return Gallery::class;
    }

    public function getTableName() {
        return 'gallery';
    }
}