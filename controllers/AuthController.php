<?php


namespace app\controllers;


use parthkapatel\phpmvc\Application;
use parthkapatel\phpmvc\Controller;
use parthkapatel\phpmvc\middlewares\AuthMiddleware;
use parthkapatel\phpmvc\Request;
use parthkapatel\phpmvc\Response;
use app\models\LoginForm;
use app\models\User;



class AuthController extends Controller
{

    public function __construct()
    {
        $this->registerMiddleware(new AuthMiddleware(['profile']));
    }

    public function login(Request $request,Response $response)
    {
        if(Application::isGuest()){
            $loginForm = new LoginForm();
            if($request->isPost()){
                $loginForm->loadData($request->getBody());
                if($loginForm->validate() && $loginForm->login()){
                    $response->redirect("/");
                    return;
                }
            }
            $this->setLayout("auth");
            return $this->render("login",[
                'model' => $loginForm
            ]);
        }else{
            $response->redirect("/");
        }
    }


    public function register(Request $request,Response $response)
    {

        if(Application::isGuest()) {
            $user = new User();
            if ($request->isPost()) {
                $user->loadData($request->getBody());
                if ($user->validate() && $user->save()) {
                    Application::$app->session->setFlash("success", 'Thanks for registering!');
                    Application::$app->response->redirect("/login");
                }
                return $this->render("register", [
                    "model" => $user
                ]);
            }
            $this->setLayout("auth");
            return $this->render("register", [
                "model" => $user
            ]);
        }else{
            $response->redirect("/");
        }
    }

    public function logout(){
        Application::$app->logout();
        Application::$app->response->redirect("/");
    }

    public function profile(){
        return $this->render('profile');
    }

    public function update(Request $request,Response $response){
        if(Application::isGuest() == false) {
            $user = new User();
            $id = Application::$app->user->id;
            if ($request->isPost()) {
                $user->loadData($request->getBody());
                if ($user->update(['firstname' => $user->firstname,'lastname' => $user->lastname,'email' => $user->email],$id)) {

                    Application::$app->session->setFlash("update", 'Data Updated');
                    Application::$app->response->redirect("/profile");
                }
                return $this->render("update", [
                    "model" => $user
                ]);
            }

            return $this->render("update", [
                "model" => Application::$app->user
            ]);
        }else{
            $response->redirect("/");
        }
    }

    public function delete(){
        $id = Application::$app->user->id;
        $user = Application::$app->user->delete($id);
        if($user){
            Application::$app->logout();
            Application::$app->response->redirect("/");
        }
    }
}