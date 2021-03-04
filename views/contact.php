<?php
/**
 * @var $this View
 * @var $model ContactForms
 */


use parthkapatel\phpmvc\Application;
use parthkapatel\phpmvc\form\TextareaField;
use parthkapatel\phpmvc\View;
use app\models\ContactForms;

$this->title = "Contact Us";

?>

<div class="container">
    <?php if(Application::$app->session->getFlash('contact')) :  ?>
        <div class="alert alert-success m-1 alert-dismissible fade show" role="alert">
            <?php echo Application::$app->session->getFlash('contact')  ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>
    <h1>Contact Us</h1>
<?php $form = \parthkapatel\phpmvc\form\Form::begin('',"post") ?>
    <?php echo $form->field($model,"subject") ?>
    <?php echo $form->field($model,"email") ?>
    <?php echo new TextareaField($model,"description") ?>
    <button type="submit" class="btn btn-primary m-1">Submit</button>
<?php \parthkapatel\phpmvc\form\Form::end() ?>

</div>