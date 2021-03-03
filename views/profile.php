<?php
/**
 * @var $this View
 */


use parthkapatel\phpmvc\View;
use \parthkapatel\phpmvc\Application;

$this->title = "Profile";

$fullname = Application::$app->user->getUserData()["firstname"]." ".Application::$app->user->getUserData()["lastname"];
$email = Application::$app->user->getUserData()["email"];
$eid = Application::$app->user->getUserData()["id"];

?>

<div class="container">
    <?php if(Application::$app->session->getFlash('update')) :  ?>
        <div class="alert alert-success m-1 alert-dismissible fade show" role="alert">
            <?php echo Application::$app->session->getFlash('update')  ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>
    <h1>Profile</h1>    
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Name : <?php echo $fullname ?></h5>
            <p class="card-text">Email Id : <?php echo $email ?></p>
        </div>
        <div class="card-footer">
            <a href="/update" class="btn btn-primary">Update</a>
            <a href="/delete" class="btn btn-danger">Delete</a>
        </div>
    </div>
</div>