<?php

/* 1. Создать галерею фотографий. Она должна состоять из одной страницы, на которой пользователь видит все картинки в уменьшенном виде. При клике на фотографию она должна открыться в браузере в новой вкладке. Размер картинок можно ограничивать с помощью свойства width.*/

//Массив имён картинок
 

    $directory = "./img";    // Папка с изображениями
    $allowed_types=array("jpg", "png", "gif");  //разрешеные типы изображений
    $file_parts = array();
      $ext="";
      $title="";
      $i=0;
    //пробуем открыть папку
      $dir_handle = @opendir($directory) or die("Ошибка при открытии папки !!!");
    while ($file = readdir($dir_handle))    //поиск по файлам
      {
      if($file=="." || $file == "..") continue;  //пропустить ссылки на другие папки
      $file_parts = explode(".",$file);          //разделить имя файла и поместить его в массив
      $ext = strtolower(array_pop($file_parts));   //последний элеменет - это расширение


      if(in_array($ext,$allowed_types))
      {
      echo '<div>
                <a href="'.$directory.'/'.$file.'"><img src="'.$directory.'/'.$file.'" class="pimg" title="'.$file.'" width = 250px /></a>
            </div>';
     $i++;
      }

      }
    closedir($dir_handle);  //закрыть папку
    ?>

