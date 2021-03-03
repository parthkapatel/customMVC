<?php

/** @var $model Model */

use parthkapatel\phpmvc\Application;
use parthkapatel\phpmvc\form\Form;
use parthkapatel\phpmvc\Model;
use parthkapatel\phpmvc\View;


/**
 * @var $this View
 */


$this->title = "Registration";
/*$val = $email = Application::$app->user->getUserData();*/

?>


<div class="container">
    <h1>Update Profile</h1>
    <?php $form = Form::begin('',"post") ?>
    <?php echo $form->field($model,"firstname") ?>
    <?php echo $form->field($model,"lastname") ?>
    <?php echo $form->field($model,"email") ?>
    <button type="submit" class="btn btn-primary m-1">Update</button>
    <?php  Form::end() ?>
</div>