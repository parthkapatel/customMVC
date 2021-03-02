<?php


namespace parthkapatel\phpmvc;


use parthkapatel\phpmvc\middlewares\BaseMiddleware;

class Controller
{
    public string  $layout = 'main';
    public string $action  = '';
    /**
     * @var BaseMiddleware[]
     */
    protected array $middlewares = [];
    public function setLayout($layout){
        $this->layout = $layout;
    }
    public function render($views,$params = []){
        return Application::$app->view->renderView($views,$params);
    }

    public function registerMiddleware(BaseMiddleware $middleware){
        $this->middlewares[] = $middleware;
    }

    /**
     * @return BaseMiddleware[]
     */
    public function getMiddlewares(): array
    {
        return $this->middlewares;
    }
}