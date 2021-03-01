<?php

/** @var $model Model */
use app\core\form\Form;
use app\core\Model;


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
   <!-- <form action="" method="post">
        <div class="mb-3">
            <label class="form-label">First Name</label>
            <input type="text" name="firstname" class="form-control" >
        </div>
        <div class="mb-3">
            <label  class="form-label">Last Name</label>
            <input type="text" name="lastname" class="form-control" >
        </div>
        <div class="mb-3">
            <label  class="form-label">Email</label>
            <input type="email" name="email" class="form-control" >
        </div>
        <div class="mb-3">
            <label  class="form-label">Password</label>
            <input type="password" name="password" class="form-control" >
        </div>
        <div class="mb-3">
            <label  class="form-label">Confirm Password</label>
            <input type="password" name="confirmPassword" class="form-control" >
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>-->
</div>