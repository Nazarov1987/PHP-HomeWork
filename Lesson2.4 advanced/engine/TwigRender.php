<?php

namespace app\engine;


use app\interfaces\IRenderer;

class TwigRender implements IRenderer
{
    public function renderTemplate($template, $params = []) {
        //подключить твиг

       // echo $twig->render('index.html', $params);
    }
}