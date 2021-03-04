<?php


namespace app\controllers;


use parthkapatel\phpmvc\Application;
use parthkapatel\phpmvc\Controller;
use parthkapatel\phpmvc\exception\ForbiddenException;
use parthkapatel\phpmvc\Request;
use parthkapatel\phpmvc\Response;
use app\models\LoginForm;


class AuthController extends Controller
{
    public LoginForm $loginForm;
    public function __construct()
    {
        $this->loginForm = new LoginForm();
    }

    public function index()
    {
        if(Application::isGuest()){
            $this->setLayout("auth");
            return $this->render("login",[
                'model' => $this->loginForm
            ]);
        }else{
            throw new ForbiddenException();
        }
    }

    public function login(Request $request,Response $response)
    {
        if(Application::isGuest()){
            $this->loginForm->loadData($request->getBody());
            if($this->loginForm->validate() && $this->loginForm->login()){
                $response->redirect("/");
                return;
            }
            return self::index();
        }else{
            $response->redirect("/");
        }
    }


}