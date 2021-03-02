<?php
/**
 * @var $this \parthkapatel\phpmvc\View
 */


$this->title = "Profile";

?>

<div class="container">
    <h1>Profile</h1>
    <form method="post" action="">
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="fname" class="form-control" >
        </div>
        <div class="mb-3">
            <label  class="form-label">Last Name</label>
            <input type="email" name="email" class="form-control" >
        </div>
        <div class="mb-3">
            <label  class="form-label">Description</label>
            <textarea name="body"  class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>