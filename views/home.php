<?php
/**
 * @var $this View
 */


use parthkapatel\phpmvc\View;

$this->title = "MVC Demo";

?>

<div id="carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100 img-fluid" src="assets/img/sigmund-HsTnjCVQ798-unsplash.jpg" style="width:100%;height:650px;" alt="Images">
            <div class="carousel-caption d-none d-md-block">
                <h5>Planning</h5>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 img-fluid" src="assets/img/thumbnail-image.jpg" style="width:100%;height:650px;" alt="Images">
            <div class="carousel-caption d-none d-md-block">
                <h5>House</h5>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carousel" data-slide="prev" role="button">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel" data-slide="next" role="button">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="jumbotron rounded-0 clearfix w-100 m-0 about" id="about" style="background-color: rgb(48, 71, 94); color: rgb(236, 236, 236);">
    <h1 class="h1 text-center">About Us</h1>
    <div class="col-lg-4 col-md-12 float-right">
        <img src="assets/img/thumbnail-image.jpg" class="img-fluid rounded" alt="image">
    </div>
    <div class="col-lg-8 col-md-12 float-right">
        <p class="lead text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the
            <strong>1500s</strong>, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book. It has survived not only five
            centuries, but also the leap into electronic typesetting, remaining essentially
            unchanged. It was popularised in the <del>1960s</del><ins>1965s</ins> with the
            release of Letraset sheets containing Lorem Ipsum passages, and more recently
            with desktop publishing software like Aldus PageMaker including versions of
            Lorem Ipsum.
        </p>
    </div>
</div>

<div class="container-fluid m-0" id="gallery" style="background-color: rgb(34, 40, 49); color: rgb(236, 236, 236);">
    <h1 class="h1 text-center p-3">Gallery</h1>
    <div class="row p-3">
        <div class="col-lg-3 col-md-6 col-sm-12">
            <img src="assets/img/thumbnail-image.jpg" id="img" class="img-thumbnail rounded" alt="image">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <img src="assets/img/thumbnail-image.jpg" id="img" class="img-thumbnail rounded" alt="image">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <img src="assets/img/thumbnail-image.jpg" id="img" class="img-thumbnail rounded" alt="image">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <img src="assets/img/thumbnail-image.jpg" id="img" class="img-thumbnail rounded" alt="image">
        </div>
    </div>

    <div class="row p-3">
        <div class="col-lg-3 col-md-6 col-sm-12">
            <img src="assets/img/thumbnail-image.jpg" id="img" class="img-thumbnail rounded" alt="image">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <img src="assets/img/thumbnail-image.jpg" id="img" class="img-thumbnail rounded" alt="image">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <img src="assets/img/thumbnail-image.jpg" id="img" class="img-thumbnail rounded" alt="image">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <img src="assets/img/thumbnail-image.jpg" id="img" class="img-thumbnail rounded" alt="image">
        </div>
    </div>
</div>
