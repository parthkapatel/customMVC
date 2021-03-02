<?php


namespace app\controllers;


use parthkapatel\phpmvc\Application;
use parthkapatel\phpmvc\Controller;
use parthkapatel\phpmvc\Request;
use parthkapatel\phpmvc\Response;
use app\models\ContactForms;

class SiteController extends Controller
{
    public function home(): string
    {
        return $this->render('home');
    }

    public function contact(Request $request,Response $response)
    {

        $contact = new ContactForms();
        if($request->isPost()){
            $contact->loadData($request->getBody());
            if($contact->validate() && $contact->send()){
                Application::$app->session->setFlash("success","Thanks for contacting us.");
                return $response->redirect("/contact");
            }
        }
        return $this->render('contact',[
            'model'=>$contact
        ]);
    }
}