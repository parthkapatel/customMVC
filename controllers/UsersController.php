<?php


namespace app\controllers;


use app\models\User;
use parthkapatel\phpmvc\Application;
use parthkapatel\phpmvc\Controller;
use parthkapatel\phpmvc\middlewares\AuthMiddleware;
use parthkapatel\phpmvc\Request;
use parthkapatel\phpmvc\Response;

class UsersController extends Controller
{
    public User $user;
    public function __construct()
    {
        $this->registerMiddleware(new AuthMiddleware(['profile',"update"]));
        $this->user = new User();
    }

    public function logout(){
        Application::$app->logout();
        Application::$app->response->redirect("/");
    }

    public function profile(){

            return $this->render('profile');

    }

    public function update(){
            return $this->render("update", [
                "model" => Application::$app->user
            ]);
    }
    public function updateData(Request $request,Response $response){
        if(Application::isGuest() == false) {
            $id = Application::$app->user->id;
            $this->user->loadData($request->getBody());
            if ($this->user->update(['firstname' => $this->user->firstname,'lastname' => $this->user->lastname],$id)) {
                Application::$app->session->setFlash("update", 'Data Updated');
                Application::$app->response->redirect("/profile");
            }
            return self::update();
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