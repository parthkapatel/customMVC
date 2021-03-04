<?php


namespace app\controllers;


use parthkapatel\phpmvc\Controller;

class ErrorController extends Controller
{
    public function E400(){
        return $this->render("errors/E400");
    }

    public function E403(){
        return $this->render("errors/E403");
    }

    public function E404(){
        return $this->render("errors/E404");
    }

    public function E408(){
        return $this->render("errors/E408");
    }

    public function E500(){
        return $this->render("errors/E500");
    }
}