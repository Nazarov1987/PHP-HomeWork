<?php

namespace app\controllers;

use app\interfaces\IRenderer;
use app\model\entities\Basket;
use app\model\entities\Authorization;
use app\model\repositories\BasketRepository;
use app\model\repositories\AuthorizationRepository;

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
	
	    public function actionIndex()
    {
        echo $this->render('index');
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
                ['content' => $this->renderTemplate($template, $params),     'count' => (new BasketRepository())->getCountWhere('session_id', session_id()),
                'auth' => (new AuthorizationRepository())->isAuth(),
                'username' => (new AuthorizationRepository())->getName()]
            );
        } else {
            return $this->renderTemplate($template, $params);
        }
    }

    public function renderTemplate($template, $params = []) {
        return $this->renderer->renderTemplate($template, $params);
    }
}