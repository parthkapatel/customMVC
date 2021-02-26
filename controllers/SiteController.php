<?php


namespace app\controllers;


use app\core\Application;
use app\core\Controller;
use app\core\Request;

class SiteController extends Controller
{
    public function home(): string
    {
        return $this->render('home');
    }

    public function contact(): string
    {
        return $this->render('contact');
    }

    public function handleContact(Request $request): string
    {
        $body = $request->getBody();
        var_dump($body);
        return "Handling Submitted Data";
    }
}