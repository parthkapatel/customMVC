<?php
/**
 * @var $this View
 * @var $model ContactForms
 */


use parthkapatel\phpmvc\form\TextareaField;
use parthkapatel\phpmvc\View;
use app\models\ContactForms;

$this->title = "Contact Us";

?>

<div class="container">
    <h1>Contact Us</h1>
<?php $form = \parthkapatel\phpmvc\form\Form::begin('',"post") ?>
    <?php echo $form->field($model,"subject") ?>
    <?php echo $form->field($model,"email") ?>
    <?php echo new TextareaField($model,"body") ?>
    <button type="submit" class="btn btn-primary m-1">Submit</button>
<?php \parthkapatel\phpmvc\form\Form::end() ?>

</div>