<!DOCTYPE html>
<html lang="es">
<?php
$page_url = $_SERVER['REQUEST_URI'];
$img_url = explode("?", $page_url);

$url_img = 'https://www.venatici.cl/get_img';
$data_img = file_get_contents($url_img);
$img = json_decode($data_img);

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
          <a class="nav-link active" href="home">Inicio<span class="sr-only">(current)</span></a>
        </li>

      </ul>

    </div>
  </nav>

  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-md-10 pt-5">
        <?php foreach ($img as $values) {
          if ($values->url == $img_url[1]) {
        ?>
            <div class="text-center">
              <!-- TITLE -->
              <div class="pt-5 wow fadeInDownBig section-header">
                <h2 class="section-title display-4"><?php echo $values->title ?></h2>
                <span class="mt-5"><?php echo $values->title ?></span>
              </div>
              <!-- TITLE -->
            </div>
            <div class="text-center">
              <img class=" wow fadeIn img-fluid z-depth-1" src="assets/images/<?php echo $values->path ?>" alt="">
              <p class="wow fadeIn mt-4">
                <?php echo $values->description ?>
              </p>
            </div>
        <?php
          }
        }
        ?>
      </div>
    </div>
  </div>


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