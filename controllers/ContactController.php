<?php


namespace app\controllers;


use app\models\ContactForms;
use parthkapatel\phpmvc\Application;
use parthkapatel\phpmvc\Controller;
use parthkapatel\phpmvc\Request;
use parthkapatel\phpmvc\Response;

class ContactController extends Controller
{

    public ContactForms $contact;
    public function __construct()
    {
        $this->contact = new ContactForms();
    }

    public function index(){
        return $this->render('contact',[
            'model'=>$this->contact
        ]);
    }

    public function store(Request $request, Response $response)
    {
        $this->contact->loadData($request->getBody());
        if($this->contact->validate() && $this->contact->send()){
            Application::$app->session->setFlash("contact","Thanks for contacting us.");
            return $response->redirect("/contact");
        }
        return $this->render('contact',[
            'model'=>$this->contact
        ]);
    }
}