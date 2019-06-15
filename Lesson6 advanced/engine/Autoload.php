<?php

namespace app\engine;

class Autoload
{
   public function loadClass($className) {
       $fileName = str_replace(['app\\', '\\'],['../', '/'],$className) . '.php';
     //var_dump($fileName);

            if (file_exists($fileName)) {
                require $fileName;
            }
    }
}