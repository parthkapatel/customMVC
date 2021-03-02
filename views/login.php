<?php
/** @var $model User
 *  @var $this \app\core\View
 */

use app\core\form\Form;
use app\models\User;


$this->title = "Log In";

?>

<div class="container">
    <h1>Log In</h1>

    <?php $form = Form::begin('',"post") ?>
    <?php echo $form->field($model,"email") ?>
    <?php echo $form->field($model,"password")->passwordField() ?>
    <button type="submit" class="btn btn-primary m-1">Login </button>
    <?php  Form::end() ?>
</div>