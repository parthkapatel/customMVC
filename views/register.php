<?php

/** @var $model Model */
use app\core\form\Form;
use app\core\Model;


/**
 * @var $this \app\core\View
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
    <?php  Form::end() ?>
</div>