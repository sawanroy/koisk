<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Advertisement </title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets/advertise/vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= base_url('assets/advertise/css/full-slider.css')?>" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
  <?php
   include_once "navbar.php";
  ?>

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('<?= base_url('assets/advertise/vendor/banking/1.jpg')?>')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Asoke Leyland</h3>
              <p>Company recriutment</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('<?= base_url('assets/advertise/vendor/banking/2.jpg')?>')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Second Slide</h3>
              <p>This is a description for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item" style="background-image: url('<?= base_url('assets/advertise/vendor/banking/3.jpg')?>')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Second Slide</h3>
              <p>This is a description for the second slide.</p>
            </div>
          </div>
            <div class="carousel-item" style="background-image: url('<?= base_url('assets/advertise/vendor/banking/4.jpg')?>')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Second Slide</h3>
              <p>This is a description for the second slide.</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('<?= base_url('assets/advertise/vendor/banking/5.jpg')?>')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Third Slide</h3>
              <p>This is a description for the third slide.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

    <!-- Bootstrap core JavaScript -->
    <script src="<?= base_url('assets/advertise/vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?= base_url('assets/advertise/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

  </body>

</html>
