<!DOCTYPE html>
<html lang="es">

<?php
/* GET DATA FROM JSON  */
$url_about = 'https://www.venatici.cl/get_about';
$data_about = file_get_contents($url_about);
$about = json_decode($data_about);

$url_programs = 'https://www.venatici.cl/get_programs';
$data_programs = file_get_contents($url_programs);
$programs = json_decode($data_programs);

$url_img = 'https://www.venatici.cl/get_img';
$data_img = file_get_contents($url_img);
$img = json_decode($data_img);

$url_services = 'https://www.venatici.cl/get_services';
$data_services = file_get_contents($url_services);
$services = json_decode($data_services);

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
  <link rel="icon" href="assets/lib/coffeekode-assets/img/favicon.png" type="image/x-icon">
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
</head>

<body data-spy="scroll" data-target="#navbar" data-offset="80">

  <nav id="navbar" class="px-5 navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar bg-dark">
    <a class="navbar-brand" href="home">
      <img src="assets/lib/coffeekode-assets/img/ic_venatici.jpg" height="30" alt="mdb logo">
      <strong>Venatici</strong>
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto nav-pills">

        <li class="nav-item">
          <a class="nav-link active" href="#home">Inicio<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about-us">Nosotros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#programs">Programas y Convocatorias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#services">Servicios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contacto</a>
        </li>
      </ul>

    </div>
  </nav>

  <!-- SECTION HOME-->
  <div id="home">
    <div class="row mx-0 bg d-flex justify-content-center">
      <!-- BACKGROUND IMAGE EFFECT PARALLAX-->
      <div class="col-md-12 text-white mt-5 pt-5 w-100 rgba-black-slight">
        <!-- LOGO COORPORATIVO-->
        <div class="text-center">
          <img class="wow fadeInLeft" src="assets/lib/coffeekode-assets/img/img-logo.png" height="100px" alt="imagen-main">
        </div>
        <!-- LOGO COORPORATIVO-->
        <!-- SCROLLDOWN ANIMATION-->
        <a href="#about-us" class="wow fadeIn mouse_wave">
          <span class="scroll_arrows one"></span>
          <span class="scroll_arrows two"></span>
          <span class="scroll_arrows three"></span>
        </a>
        <!-- SCROLLDOWN ANIMATION-->
      </div>
    </div>
  </div>
  <!-- SECTION HOME-->


  <!-- SECTION ABOUT US -->
  <div id="about-us" class="pt-5">
    <div class="container mt-5">
      <!-- TITLE -->
      <div class="section-header">
        <h2 class="section-title display-4">Sobre nosotros</h2>
        <span>Nosotros</span>
        <p class="section-subtitle">Conocenos</p>
      </div>
      <!-- TITLE -->
      <!-- TEXT CONTENT-->
      <div class="container px-5">
        <!--Grid row-->
        <div class="row wow fadeIn mt-3">
          <!-- Start Column img about-us -->
          <div class="d-none d-md-block col-md-4">
            <img src="assets/lib/coffeekode-assets/img/img-about-us.jpg" class="img-fluid z-depth-1 mb-4" alt="img-about-us">
          </div>
          <!-- Finish column img about-us -->
          <!--Grid column-->
          <div class="col-md-8">
            <!--First row About Us-->
            <div class="row">
              <div class="col-1 mr-2">
                <i class="fas fa-users fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h5 class="feature-title">Sobre Nosotros</h5>
                <p id="about_us" class="grey-text text-justify">
                  <?php echo $about[0]->about_us; ?>
                </p>
              </div>
            </div>
            <!--/First row-->
            <!--Second row Mission-->
            <div class="row">
              <div class="col-1 mr-1">
                <i class="fas fa-flag-checkered fa-2x blue-text"></i>
              </div>
              <div class="col-10">
                <h5 class="feature-title">Misión</h5>
                <p id="mission" class="grey-text text-justify">
                  <?php echo $about[0]->mission; ?>
                </p>
              </div>
            </div>
            <!--/Second row Vission-->
            <!--Third row-->
            <div class="row">
              <div class="col-1 mr-1">
                <i class="fas fa-binoculars fa-2x cyan-text"></i>
              </div>
              <div class="col-10">
                <h5 class="feature-title">Visión</h5>
                <p id="vision" class="grey-text text-justify">
                  <?php echo $about[0]->vision; ?>
                </p>
              </div>
            </div>
            <!--/Third row-->
          </div>
          <!--/Grid column-->
        </div>
        <!--/Grid row-->
      </div>
      <!-- TEXT CONTENT-->
    </div>
  </div>
  <!-- SECTION ABOUT US -->

  <hr id="programs" class="text-grey pb-2 ">

  <section>
    <div class="container mt-5 wow fadeIn">
      <!-- TITLE -->
      <div class="section-header">
        <h2 class="section-title display-4">Programas y Convocatorias</h2>
        <span>Programas</span>
        <p class="section-subtitle">
          <?php echo $programs[0]->description; ?>
        </p>
      </div>
      <!-- TITLE -->

      <div class="row wow zoomIn">
        <div class="col-12">
          <!-- CAROUSEL -->
          <!--Carousel Wrapper-->
          <div id="carousel-1" class="carousel slide carousel-fade" data-ride="carousel">
            <!--Indicators-->
            <ol class="carousel-indicators">
              <?php
              foreach ($img as $values) {
                echo "<li data-target='#carousel-$values->id_img data-slide-to='$values->id_img'></li>";
              }
              ?>
            </ol>
            <!--/.Indicators-->
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
              <?php
              $active = true;
              foreach ($img as $values) {
              ?>
                <div class="carousel-item <?php echo ($active == true ? "active" : "") ?>">
                  <div class="view">
                    <img class="d-block w-100" src="assets/images/<?php echo $values->path ?>" alt="First slide">
                    <div class="mask rgba-black-light"></div>
                  </div>
                  <div class="carousel-caption">
                    <h3 class="h3-responsive">Averigua más</h3>
                    <a href="programs?<?php echo $values->url ?>" class="text-white">Presiona Aquí</a>
                  </div>
                </div>
              <?php
                $active = false;
              }
              ?>
            </div>
            <!--/.Slides-->
            <!--Controls-->
            <a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev">
              <i class="fas fa-chevron-circle-left fa-2x"></i>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next">
              <i class="fas fa-chevron-circle-right fa-2x"></i>
              <span class="sr-only">Next</span>
            </a>
            <!--/.Controls-->
          </div>
          <!--/.Carousel Wrapper-->
          <!-- CAROUSEL -->
        </div>

      </div>

    </div>

  </section>

  <hr id="services" class="text-grey pb-5 pt-2 ">


  <!--Start Section: Services-->
  <section id="servicios" class="mx-4 px-4 ">
    <div class="container">
      <div class="text-center">
        <!-- TITLE -->
        <div class="section-header">
          <h2 id="title_services" class=" section-title display-4">Nuestros Servicios</h2>
          <span>Servicios</span>
          <p class="section-subtitle">Nuestros principales servicios</p>
        </div>
        <!-- TITLE -->
      </div>

      <div id="services" class="row text-center mt-4">
        <div class="col-md-4 wow fadeInLeft">
          <span class="fa-stack fa-4x mb-2">
            <i class="fas fa-circle fa-stack-2x icon-color"></i>
            <i class="<?php echo $services[0]->icon; ?>"></i></span>
          <h3 class="service-heading">
            <?php echo $services[0]->title; ?>
          </h3>
          <p id="text" class="grey-text">
            <?php echo $services[0]->description; ?>
          </p>
          <a class="btn btn-primary btn-sm mb-4 rounded-pill btn-outline-primary" href="<?php echo $services[0]->path; ?>">
            <h6 class="pt-2">más información</h6>
          </a>
        </div>
        <div class="col-md-4 wow fadeIn">
          <span class="fa-stack fa-4x mb-2">
            <i class="fas fa-circle fa-stack-2x icon-color"></i>
            <i class="<?php echo $services[1]->icon; ?>"></i></span>
          </span>
          <h3 class="service-heading">
            <?php echo $services[1]->title; ?>
          </h3>
          <p id="text" class="grey-text">
            <?php echo $services[1]->description; ?>
          </p>
          <a class="btn btn-primary btn-sm mb-4 rounded-pill btn-outline-primary" href="<?php echo $services[1]->path; ?>">
            <h6 class="pt-2">más información</h6>
          </a>
        </div>

        <div class="col-md-4 wow fadeInRight">
          <span class="fa-stack fa-4x mb-2">
            <i class="fas fa-circle fa-stack-2x icon-color"></i>
            <i class="<?php echo $services[2]->icon; ?>"></i></span>
          </span>
          <h3 class="service-heading">
            <?php echo $services[2]->title; ?>
          </h3>
          <p id="text" class="grey-text">
            <?php echo $services[2]->description; ?>
          </p>
          <a class="btn btn-primary btn-sm mb-4 rounded-pill btn-outline-primary" href="<?php echo $services[2]->path; ?>">
            <h6 class="pt-2">más información</h6>
          </a>
        </div>
      </div>
    </div>
  </section>

  <hr id="contact">


  <section id="contacto" class="area pt-5">
    <div class="container">
      <div class="text-center">
        <!-- TITLE -->
        <div class="section-header">
          <h2 id="title_services" class=" section-title display-4">Contáctanos</h2>
          <span>Contacto</span>
          <p id="contact_description" class="section-subtitle">
            <?php echo $contact[0]->description; ?>
          </p>
        </div>
        <!-- TITLE -->

      </div>
      <div class="row mt-5">
        <div class="col-md-5 wow slideInLeft">
          <div class="card">
            <div class="card-body text-left">
              <div class="form-header bg-primary text-white px-3 pb-2 pt-3 rounded">
                <h3><i class="fas fa-envelope"></i> Escríbenos</h3>
              </div>
              <div class="md-form">
                <i class="fas fa-user prefix grey-text"></i>
                <input style="display: none;" id="mail_to" value="<?php echo $contact[0]->email_1; ?>">
                <input type="text" id="name" class="form-control">
                <label for="name">Tú nombre</label>
              </div>
              <div class="md-form">
                <i class="fas fa-envelope prefix grey-text"></i>
                <input type="text" id="email" class="form-control">
                <label for="email">Tú correo electrónico</label>
              </div>
              <div class="md-form">
                <i class="fas fa-tag prefix grey-text"></i>
                <input type="text" id="title" class="form-control">
                <label for="title">Título</label>
              </div>
              <div class="md-form">
                <i class="fas fa-pencil-alt prefix grey-text"></i>
                <textarea id="message" class="form-control md-textarea" rows="3"></textarea>
                <label for="message">Mensaje</label>
              </div>
              <div class="text-center mt-4">
                <button id="btn_send" class="btn btn-outline-primary rounded-pill waves-effect waves-light">Enviar</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-7 mt-5 mt-md-0 wow slideInRight">
          <div id="map-container-google-11" class="z-depth-1-half map-container-section" style="height: 400px; min-width: 100%;">
            <iframe src="<?php echo $contact[0]->url_maps; ?>" frameborder="0" style="border:0" allowfullscreen=""></iframe></div>
          <hr>
          <div class="row text-center mt-4">
            <div class="col-md-4">
              <i class="fas fa-map-marker-alt"></i>
              <p id="contact_address"><?php echo $contact[0]->address; ?></p>
            </div>
            <div class="col-md-3">
              <i class="fas fa-phone"></i>
              <p id="contact_phone_1"><?php echo $contact[0]->phone_1; ?></p>
              <p id="contact_phone_2"><?php echo $contact[0]->phone_2; ?></p>
            </div>
            <div class="col-md-5">
              <i class="fas fa-envelope"></i>
              <p id="contact_email"><?php echo $contact[0]->email_1; ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



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
  <script type="text/javascript" src="assets/js/home.js"></script>

</body>

</html>