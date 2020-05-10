<!DOCTYPE html>
<html lang="es">

<?php
/* GET DATA FROM JSON  */
$url_services = 'https://www.venatici.cl/get_services';
$data_services = file_get_contents($url_services);
$services = json_decode($data_services);

$url_plans_marketing = 'https://www.venatici.cl/get_plans_marketing';
$data_plans_marketing = file_get_contents($url_plans_marketing);
$plans_marketing = json_decode($data_plans_marketing);

$url_details_plan_5 = 'https://www.venatici.cl/get_details_plan_5';
$data_details_plan_5 = file_get_contents($url_details_plan_5);
$details_plan_5 = json_decode($data_details_plan_5);

$url_details_plan_6 = 'https://www.venatici.cl/get_details_plan_6';
$data_details_plan_6 = file_get_contents($url_details_plan_6);
$details_plan_6 = json_decode($data_details_plan_6);

$url_details_plan_7 = 'https://www.venatici.cl/get_details_plan_7';
$data_details_plan_7 = file_get_contents($url_details_plan_7);
$details_plan_7 = json_decode($data_details_plan_7);

$url_contact = 'https://www.venatici.cl/get_contact';
$data_contact = file_get_contents($url_contact);
$contact = json_decode($data_contact);
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Venatici - Asesoria Comercial y Publicidad</title>
  <!-- MDB icon -->
  <link rel="icon" href="assets/img/favicon.png" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/lib/coffeekode-assets/lib/fontawesome-5.12.1/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="assets/lib/coffeekode-assets/css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="assets/lib/coffeekode-assets/css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="assets/lib/coffeekode-assets/css/style.css">
  <link rel="stylesheet" href="assets/lib/coffeekode-assets/css/scrolldown-animation.css">
  <link rel="stylesheet" href="assets/lib/coffeekode-assets/css/price-services.css">
</head>

<body data-spy="scroll" data-target="#navbar" data-offset="80">

  <nav id="navbar" class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar bg-dark">
    <a class="navbar-brand" href="home">
      <img src="assets/lib/coffeekode-assets/img/img-logo.png" height="30" alt="mdb logo">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto nav-pills">

        <li class="nav-item">
          <a class="nav-link" href="home">Inicio<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $services[0]->path; ?>">Inicio Emprende</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="<?php echo $services[1]->path; ?>">Marketing Digital</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $services[2]->path; ?>">Página Web</a>
        </li>

      </ul>

    </div>
  </nav>


  <main>
    <section class="py-5">
      <div class="container mb-4">
        <!-- TITLE -->
        <div class="pt-5 wow fadeInDownBig section-header">
          <h2 id="title_emprende" class="section-title display-4"><?php echo $services[1]->title; ?></h2>
          <span class="mt-5">Marketing</span>
          <p id="description_emprende" class="section-subtitle">
            <?php echo $services[1]->description; ?>
          </p>
        </div>
        <!-- TITLE -->

        <div id="card_marketing" class="row">
          <div id="details_plan_5" class="col-md-4">
            <div class="single-price border border-light">
              <div class="price-head">
                <h4>
                  <?php echo $plans_marketing[0]->title; ?>
                </h4>
                <p>
                  <?php echo $plans_marketing[0]->cost; ?>
                </p>
              </div>
              <div class="price-content">
                <ul>
                  <?php
                  foreach ($details_plan_5 as $values) {
                    echo "<li class='pb-2'><i class=" . ($values->check == 1 ? "'fa fa-check-circle'" : "'fa fa-times-circle'") . "></i>" . $values->description . "</li>";
                  }
                  ?>
                </ul>
              </div>
            </div>
          </div>
          <div id="details_plan_6" class="col-md-4">
            <div class="single-price border border-light">
              <div class="price-head">
                <h4>
                  <?php echo $plans_marketing[1]->title; ?>
                </h4>
                <p>
                  <?php echo $plans_marketing[1]->cost; ?>
                </p>
              </div>
              <div class="price-content">
                <ul>
                  <?php
                  foreach ($details_plan_6 as $values) {
                    echo "<li class='pb-2'><i class=" . ($values->check == 1 ? "'fa fa-check-circle'" : "'fa fa-times-circle'") . "></i>" . $values->description . "</li>";
                  }
                  ?>
                </ul>
              </div>
            </div>
          </div>
          <div id="details_plan_7" class="col-md-4">
            <div class="single-price border border-light">
              <div class="price-head">
                <h4>
                  <?php echo $plans_marketing[2]->title; ?>
                </h4>
                <p>
                  <?php echo $plans_marketing[2]->cost; ?>
                </p>
              </div>
              <div class="price-content">
                <ul>
                  <?php
                  foreach ($details_plan_7 as $values) {
                    echo "<li class='pb-2'><i class=" . ($values->check == 1 ? "'fa fa-check-circle'" : "'fa fa-times-circle'") . "></i>" . $values->description . "</li>";
                  }
                  ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer id="section-footer" class="sticky-bottom page-footer bg-dark font-small wow fadeIn pt-3">

    <!-- Start Contact-->
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <a href="home">
            <img src="assets/lib/coffeekode-assets/img/img-logo.png" height="90" class="d-inline-block align-top" alt="mdb logo">
          </a>

        </div>
        <div class="col-lg-4">
          <h3 class="h3">Contacto</h3>
          <hr class="hr-light">
          <p><i class="fas fa-map-marker-alt mr-3"></i><label id="footer_address">Talca, Región del Maule -
              Chile</label></p>
          <p><i class="fab fa-whatsapp mr-3"></i><label id="footer_phone">+56 9 7358 6517, +56 9 9911 1915</label></p>
          <p id="footer_email"><i class="fas fa-envelope mr-3"></i> <a href="mailto:asesorias@venatici.cl">asesorias@venatici.cl</a></p>
        </div>
        <div class="col-lg-4">
          <h3 class="h3">Síguenos</h3>
          <hr class="hr-light">
          <div id="rrss"><a href="https://www.facebook.com/venatici/" target="_blank"><i class="fab fa-facebook-f mr-3 fa-lg"></i></a><a href="undefined" target="_blank"><i class="fab fa-instagram mr-3 fa-lg"></i></a></div>
        </div>
      </div>
    </div>
    <!--/ Finish Contact-->

    <!--Copyright-->
    <div class="footer-copyright py-3 text-right pr-4">
      © 2020 Copyright:
      <a href="https://coffeekode.cl/" target="_blank"> Desarrollado por CoffeKode </a>
    </div>
    <!--/.Copyright-->

  </footer>
  <!-- End your project here-->
  <!-- jQuery -->
  <script type="text/javascript" src="assets/lib/coffeekode-assets/js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="assets/lib/coffeekode-assets/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="assets/lib/coffeekode-assets/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="assets/lib/coffeekode-assets/js/mdb.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="assets/lib/coffeekode-assets/js/style.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

</body>

</html>