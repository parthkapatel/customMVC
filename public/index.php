<?php


use app\controllers\AuthController;
use app\controllers\ContactController;
use app\controllers\ErrorController;
use app\controllers\RegistrationController;
use app\controllers\UsersController;
use parthkapatel\phpmvc\Application;
use parthkapatel\phpmvc\Controller;


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


$controller = new Controller();
$app = new Application(dirname(__DIR__),$config);

$app->router->get('/',function() use ($controller) {
    return $controller->render('home');
});

$app->router->get('/#about',function() use ($controller) {

    return $controller->render('home');
});

$app->router->get('/#gallery',function() use ($controller) {
    return $controller->render('home');
});

$app->router->get('/contact',[ContactController::class,'index']);
$app->router->post('/contact',[ContactController::class,'store']);

$app->router->get('/login',[AuthController::class,'index']);
$app->router->post('/login',[AuthController::class,'login']);

$app->router->get('/register',[RegistrationController::class,'index']);
$app->router->post('/register',[RegistrationController::class,'register']);

$app->router->get('/logout',[UsersController::class,'logout']);
$app->router->get('/profile',[UsersController::class,'profile']);

$app->router->get('/update',[UsersController::class,'update']);
$app->router->post('/update',[UsersController::class,'updateData']);

$app->router->get('/delete',[UsersController::class,'delete']);

$app->router->get('/error/400',[ErrorController::class,'E400']);
$app->router->get('/error/403',[ErrorController::class,'E403']);
$app->router->get('/error/404',[ErrorController::class,'E404']);
$app->router->get('/error/408',[ErrorController::class,'E408']);
$app->router->get('/error/500',[ErrorController::class,'E500']);

$app->run();