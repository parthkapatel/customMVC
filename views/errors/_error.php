<?php

/**
 * @var $exception \Exception
 */

use parthkapatel\phpmvc\Application;

switch ($exception->getCode()){
    case 400:
        return Application::$app->response->redirect("/error/400");
    case 403:
        return Application::$app->response->redirect("/error/403");
    case 404:
        return Application::$app->response->redirect("/error/404");
    case 408:
        return Application::$app->response->redirect("/error/408");
    case 500:
        return Application::$app->response->redirect("/error/500");
    default:
        var_dump("bfvb");
}
?>

