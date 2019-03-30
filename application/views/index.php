<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HCET KIOSK </title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets/main/vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= base_url('assets/main/css/3-col-portfolio.css');?>" rel="stylesheet">
 <script>
        window.oncontextmenu = function () {
            console.log("Right Click Disabled");
            return false;
        }
    </script>
  </head>

  <body oncontextmenu="return false">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
         <a class="navbar-brand" href="#"><img height="50" src="<?= base_url('assets/kioskimage/logo.png')?>"></a>
        <a class="navbar-brand" href="#">Welcome to HCET Kiosk</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('main2_controller/admin')?>">Admin Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <div class="container">

      <!-- Page Heading -->
      <h1 class="my-4">Select One of
        <small>The Kiosk to Operate</small>
      </h1>
<?php if( $error = $this->session->flashdata('login_failed')):?>
    <div class="row ">
      <div class="col-lg-6">
        <div class="alert alert-dismissible alert-success">
  <h4 class="alert-heading">Thank you</h4>
  <?= $error ?>

</div>
      </div>
    </div>
    <?php endif;?>
      <div class="row">
         <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
           <div  class="list-group-item list-group-item-action active">
    Notices
  </div>
            <?php if(count($a)): ?>
      <?php foreach($a->result() as $noti): ?>
<marquee behavior="alternate" direction="up" width="100%" ><marquee direction="up" style="height:100px" scrollamount="2.5" onmouseover="this.stop();"
           onmouseout="this.start();" "><ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
    <?= $noti->title ?>
    <span class="badge badge-primary badge-pill"></span>
  </li></ul></marquee></marquee>
    <!-- Page Content -->
    <?php endforeach; ?>
           <?php endif; ?>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="<?= base_url('main_controller/internet')?>"><img class="card-img-top" src="<?= base_url('assets/kioskimage/internet.jpg')?>" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="<?= base_url('main_controller/internet')?>">internet Kiosk</a>
              </h4>
              <p class="card-text">Internet kiosks are predominantly found in public waiting areas such as airports, train stations, libraries, museums to name a few.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="<?= base_url('main_controller/advertise')?>"><img class="card-img-top" src="<?= base_url('assets/kioskimage/add.jpg');?>" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="<?= base_url('main_controller/advertise')?>">Advertising</a>
              </h4>
              <p class="card-text">Advertisement standing displays, standing Totems, standing Kiosks or Digital </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="<?= base_url('main_controller/information')?>"><img class="card-img-top" src="<?= base_url('assets/kioskimage/info2.png');?>" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="<?= base_url('main_controller/information')?>">Information Kiosk</a>
              </h4>
              <p class="card-text">Information Kiosks on the other hand, are used to provide information to the users of the system.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="<?= base_url('main_controller/map')?>"><img class="card-img-top" src="<?= base_url('assets/kioskimage/way.jpg');?>" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="<?= base_url('main_controller/map')?>">WAY Finding Kiosk</a>
              </h4>
              <p class="card-text">Wayfinding kiosks as the name suggests are kiosks providing a service to help people establish where they are exactly within a location</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="<?= base_url('main_controller/interctive')?>"><img class="card-img-top" src="<?= base_url('assets/kioskimage/intract.jpg');?>" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="<?= base_url('main_controller/interctive')?>">Interactive kiosk</a>
              </h4>
              <p class="card-text">Self-Service Kiosks as the name suggests are mainly used for providing a service such as taking payment from customers</p>
            </div>
          </div>
        </div>
        </div>    <!-- /.container -->
</div>
    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Developed by <br> Sawan Roy | Shekhar dutta | Megha Agarwal | Priya Gupta | Kritika Patel</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?= base_url('assets/main/vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?= base_url('assets/main/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

  </body>
</html>
