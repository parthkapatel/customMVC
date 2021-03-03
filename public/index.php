<?php


use app\controllers\AuthController;
use parthkapatel\phpmvc\Application;
use app\controllers\SiteController;


require_once __DIR__ .'/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();




$config = [
        'userClass' =>\app\models\User::class,
        'db'=>[
            'dsn'=>$_ENV['DB_DSN'],
            'user'=>$_ENV['DB_USER'],
            'password'=>$_ENV['DB_PASSWORD']
        ]
    ];


$app = new Application(dirname(__DIR__),$config);

$app->router->get('/',function(){
    return (new parthkapatel\phpmvc\Controller)->render('home');
});

$app->router->get('/#about',function(){
    return (new parthkapatel\phpmvc\Controller)->render('home');
});

$app->router->get('/#gallery',function(){
    return (new parthkapatel\phpmvc\Controller)->render('home');
});

$app->router->get('/contact',[SiteController::class,'contact']);
$app->router->post('/contact',[SiteController::class,'contact']);

$app->router->get('/login',[AuthController::class,'login']);
$app->router->post('/login',[AuthController::class,'login']);

$app->router->get('/register',[AuthController::class,'register']);
$app->router->post('/register',[AuthController::class,'register']);

$app->router->get('/logout',[AuthController::class,'logout']);
$app->router->get('/profile',[AuthController::class,'profile']);

$app->router->get('/update',[AuthController::class,'update']);
$app->router->post('/update',[AuthController::class,'update']);

$app->router->get('/delete',[AuthController::class,'delete']);

$app->run();