<?php


namespace app\controllers;


use app\models\User;
use parthkapatel\phpmvc\Application;
use parthkapatel\phpmvc\Controller;
use parthkapatel\phpmvc\exception\ForbiddenException;
use parthkapatel\phpmvc\Request;
use parthkapatel\phpmvc\Response;

class RegistrationController extends Controller
{

    public User $user;
    public function __construct()
    {
        $this->user = new User();
    }

    public function index(){
        if(Application::isGuest()){
            $this->setLayout("auth");
            return $this->render("register", [
                "model" => $this->user
            ]);
        }else{
            throw new ForbiddenException();
        }
    }

    public function register(Request $request,Response $response)
    {
        if(Application::isGuest()) {
            $this->user->loadData($request->getBody());
            if ($this->user->validate() && $this->user->save()) {
                Application::$app->session->setFlash("success", 'Thanks for registering!');
                Application::$app->response->redirect("/login");
            }
            try {
                return self::index();
            } catch (ForbiddenException $e) {
            }
        }else{
            $response->redirect("/");
        }
    }
}