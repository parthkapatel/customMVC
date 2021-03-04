<?php

/** @var $model Model */

use parthkapatel\phpmvc\form\Form;
use parthkapatel\phpmvc\Model;
use parthkapatel\phpmvc\View;


/**
 * @var $this View
 */


$this->title = "Update Profile";
?>


<div class="container">
    <h1>Update Profile</h1>
    <?php $form = Form::begin('',"post") ?>
    <?php echo $form->field($model,"first_name") ?>
    <?php echo $form->field($model,"last_name") ?>
    <button type="submit" id="updateBtn" class="btn btn-primary m-1">Update</button>
    <?php  Form::end() ?>
</div>