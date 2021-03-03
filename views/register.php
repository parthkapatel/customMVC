<?php

/** @var $model Model */
use parthkapatel\phpmvc\form\Form;
use parthkapatel\phpmvc\Model;


/**
 * @var $this \parthkapatel\phpmvc\View
 */


$this->title = "Registration";


?>


<div class="container">
    <h1>Create an account</h1>

    <?php $form = Form::begin('',"post") ?>
        <?php echo $form->field($model,"firstname") ?>
        <?php echo $form->field($model,"lastname") ?>
        <?php echo $form->field($model,"email") ?>
        <?php echo $form->field($model,"password")->passwordField() ?>
        <?php echo $form->field($model,"confirmPassword")->passwordField() ?>
        <button type="submit" class="btn btn-primary m-1">Register</button>
        <a class="float-right" style="text-decoration: none" href="/login" >Already register? click here</a>
    <?php  Form::end() ?>
</div>