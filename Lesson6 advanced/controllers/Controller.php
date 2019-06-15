<?php

namespace app\controllers;

use app\interfaces\IRenderer;
use app\model\Basket;
use app\model\Authorization;

abstract class Controller
{
    private $action;
    private $defaultAction = 'index';
    private $layout = 'main';
    private $useLayout = true;
	private $renderer;
	
	/**
     * Controller constructor.
     * @param $renderer
     */
    public function __construct(IRenderer $renderer)
    {
        $this->renderer = $renderer;
    }
	
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
                ['content' => $this->renderTemplate($template, $params),     'count' => Basket::getCountWhere('session_id', session_id()),
                'auth' => Authorization::isAuth(),
                'username' => Authorization::getName()]
            );
        } else {
            return $this->renderTemplate($template, $params);
        }
    }

    public function renderTemplate($template, $params = []) {
        return $this->renderer->renderTemplate($template, $params);
    }
}