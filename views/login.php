<?php
/** @var $model User
 *  @var $this \parthkapatel\phpmvc\View
 */

use parthkapatel\phpmvc\Application;
use parthkapatel\phpmvc\form\Form;
use app\models\User;


$this->title = "Log In";

?>

<div class="container">
    <?php if(Application::$app->session->getFlash('success')) :  ?>
        <div class="alert alert-success m-1 alert-dismissible fade show" role="alert">
            <?php echo Application::$app->session->getFlash('success')  ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>
    <h1>Log In</h1>
    <?php $form = Form::begin('',"post") ?>
    <?php echo $form->field($model,"email") ?>
    <?php echo $form->field($model,"password")->passwordField() ?>
    <button type="submit" class="btn btn-primary m-1">Login </button>
    <a class="float-right" style="text-decoration: none" href="/register" >Not register? click here</a>
    <?php  Form::end() ?>
</div>