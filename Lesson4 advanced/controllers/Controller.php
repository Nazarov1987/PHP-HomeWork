<?php

namespace app\controllers;

abstract class Controller
{
    private $action;
    private $defaultAction = 'index';
    private $layout = 'main';
    private $useLayout = true;

    public function runAction($action = null)
    {
        $this->action = $action ?: $this->defaultAction;
        $method = "action" . ucfirst($this->action);
        if (method_exists($this, $method))
            $this->$method();
        else
            echo "404";
    }
    public function render($template, $params = []) { //Вставка шаблона
        if ($this->useLayout) {
            return $this->renderTemplate(
                "layouts/{$this->layout}",
                ['content' => $this->renderTemplate($template, $params)]
            );
        } else {
            return $this->renderTemplate($template, $params);
        }
    }

    public function renderTemplate($template, $params = []) {
        ob_start();
        extract($params); //создание переменных по ключам
        $fileName = TEMPLATES_DIR . $template . ".php"; //формирование пути к шаблону
        if (file_exists($fileName)) {
            include $fileName; 
        }
        else
            echo "404";
        return ob_get_clean(); //возвращаем содержимое буфера
    }
}