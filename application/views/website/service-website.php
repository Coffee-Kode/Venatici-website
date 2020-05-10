<!DOCTYPE html>
<html lang="es">

<?php
/* GET DATA FROM JSON  */
$url_services = 'https://www.venatici.cl/get_services';
$data_services = file_get_contents($url_services);
$services = json_decode($data_services);

$url_plans_web = 'https://www.venatici.cl/get_plans_web';
$data_plans_web = file_get_contents($url_plans_web);
$plans_web = json_decode($data_plans_web);

$url_details_plan_8 = 'https://www.venatici.cl/get_details_plan_8';
$data_details_plan_8 = file_get_contents($url_details_plan_8);
$details_plan_8 = json_decode($data_details_plan_8);

$url_details_plan_9 = 'https://www.venatici.cl/get_details_plan_9';
$data_details_plan_9 = file_get_contents($url_details_plan_9);
$details_plan_9 = json_decode($data_details_plan_9);

$url_details_plan_10 = 'https://www.venatici.cl/get_details_plan_10';
$data_details_plan_10 = file_get_contents($url_details_plan_10);
$details_plan_10 = json_decode($data_details_plan_10);

$url_details_plan_11 = 'https://www.venatici.cl/get_details_plan_11';
$data_details_plan_11 = file_get_contents($url_details_plan_11);
$details_plan_11 = json_decode($data_details_plan_11);

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
          <a class="nav-link" href="<?php echo $services[1]->path; ?>">Marketing Digital</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="<?php echo $services[2]->path; ?>">Página Web</a>
        </li>
      </ul>

    </div>
  </nav>

  <main>
    <section class="py-5 mb-4">
      <div class="container text-center">
        <!-- TITLE -->
        <div class="pt-5 wow fadeInDownBig section-header">
          <h2 id="title_emprende" class="section-title display-4"><?php echo $services[2]->title; ?></h2>
          <span class="mt-5">Tú Sitio Web</span>
          <p id="description_emprende" class="section-subtitle">
            <?php echo $services[2]->description; ?>
          </p>
        </div>
        <!-- TITLE -->
        <div id="card_web" class="row">
          <div id="details_plan_8" class="col-md-3">
            <div class="single-price border border-light">
              <div class="price-head">
                <h4>
                  <?php echo $plans_web[0]->title; ?>
                </h4>
                <p>
                  <?php echo $plans_web[0]->cost; ?>
                </p>
              </div>
              <div class="price-content">
                <ul>
                  <?php
                  foreach ($details_plan_8 as $values) {
                    echo "<li class='pb-2'><i class=" . ($values->check == 1 ? "'fa fa-check-circle'" : "'fa fa-times-circle'") . "></i>" . $values->description . "</li>";
                  }
                  ?>
                </ul>
              </div>
            </div>
          </div>
          <div id="details_plan_9" class="col-md-3">
            <div class="single-price border border-light">
              <div class="price-head">
                <h4>
                  <?php echo $plans_web[1]->title; ?>
                </h4>
                <p>
                  <?php echo $plans_web[1]->cost; ?>
                </p>
              </div>
              <div class="price-content">
                <ul>
                  <?php
                  foreach ($details_plan_9 as $values) {
                    if ($values->id_details <= 45) {
                      echo "<li class='pb-2'><i class=" . ($values->check == 1 ? "'fa fa-check-circle'" : "'fa fa-times-circle'") . "></i>" . $values->description . "</li>";
                    }
                  }
                  ?>
                  <li class="text-center">
                    <button class="btn btn-outline-primary text-center" data-toggle="modal" data-target="#modal_9">Mostrar más</button>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div id="details_plan_10" class="col-md-3">
            <div class="single-price border border-light">
              <div class="price-head">
                <h4>
                  <?php echo $plans_web[2]->title; ?>
                </h4>
                <p>
                  <?php echo $plans_web[2]->cost; ?>
                </p>
              </div>
              <div class="price-content">
                <ul>
                  <?php
                  foreach ($details_plan_10 as $values) {
                    if ($values->id_details <= 55) {
                      echo "<li class='pb-2'><i class=" . ($values->check == 1 ? "'fa fa-check-circle'" : "'fa fa-times-circle'") . "></i>" . $values->description . "</li>";
                    }
                  }
                  ?>
                  <li class="text-center">
                    <button class="btn btn-outline-primary text-center" data-toggle="modal" data-target="#modal_10">Mostrar más</button>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div id="details_plan_11" class="col-md-3">
            <div class="single-price border border-light">
              <div class="price-head">
                <h4>
                  <?php echo $plans_web[2]->title; ?>
                </h4>
                <p>
                  <?php echo $plans_web[2]->cost; ?>
                </p>
              </div>
              <div class="price-content">
                <ul>
                  <?php
                  foreach ($details_plan_11 as $values) {
                    if ($values->id_details <= 66) {
                      echo "<li class='pb-2'><i class=" . ($values->check == 1 ? "'fa fa-check-circle'" : "'fa fa-times-circle'") . "></i>" . $values->description . "</li>";
                    }
                  }
                  ?>
                  <li class="text-center">
                    <button class="btn btn-outline-primary text-center " data-toggle="modal" data-target="#modal_11">Mostrar más</button>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="modal_web">
        <div class="modal fade" id="modal_8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Plan BÁSICO</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
              </div>
              <div class="price-content">
                <ul>
                  <li><i class="fa fa-check-circle"></i>One Page - hasta 4 Secciones</li>
                  <li><i class="fa fa-check-circle"></i>1 Banners Principales Animados</li>
                  <li><i class="fa fa-check-circle"></i>Adaptable a Cualquier Dispositivo</li>
                  <li><i class="fa fa-check-circle"></i>Enlace a Redes Sociales</li>
                  <li><i class="fa fa-check-circle"></i>Formulario de Contacto</li>
                  <li><i class="fa fa-check-circle"></i>Ubicación en Google Maps</li>
                  <li><i class="fa fa-check-circle"></i>Sitio Optimizado SEO para Google</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="modal_9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Plan MEDIO</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
              </div>
              <div class="price-content">
                <ul>
                  <?php
                  foreach ($details_plan_9 as $values) {
                    echo "<li class='pb-2'><i class=" . ($values->check == 1 ? "'fa fa-check-circle'" : "'fa fa-times-circle'") . "></i>" . $values->description . "</li>";
                  }
                  ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="modal_10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Plan AVANZADO</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="price-content">
                <ul>
                  <li>
                    <?php
                    foreach ($details_plan_10 as $values) {
                      echo "<li class='pb-2'><i class=" . ($values->check == 1 ? "'fa fa-check-circle'" : "'fa fa-times-circle'") . "></i>" . $values->description . "</li>";
                    }
                    ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="modal_11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Plan FULL AVANZADO</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="price-content">
                <ul>
                  <?php
                  foreach ($details_plan_11 as $values) {
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
          <p><i class="fas fa-map-marker-alt mr-3"></i><label id="footer_address"><?php echo $contact[0]->address; ?></label></p>
          <p><i class="fab fa-whatsapp mr-3"></i><label id="footer_phone"><?php echo $contact[0]->phone_1; ?>, <?php echo $contact[0]->phone_2; ?></label></p>
          <p id="footer_email"><i class="fas fa-envelope mr-3"></i> <a href="mailto:<?php echo $contact[0]->email_1; ?>"><?php echo $contact[0]->email_1; ?></a></p>
        </div>
        <div class="col-lg-4">
          <h3 class="h3">Síguenos</h3>
          <hr class="hr-light">
          <div id="rrss">
            <a href="<?php echo $contact[0]->url_facebook; ?>" target="_blank"><i class="fab fa-facebook-f mr-3 fa-lg"></i></a>
            <a href="<?php echo $contact[0]->url_instagram; ?>" target="_blank"><i class="fab fa-instagram mr-3 fa-lg"></i></a>
          </div>
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

</body>

</html>