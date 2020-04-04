<!DOCTYPE html>
<html lang="es">
<?php
$page_url = $_SERVER['REQUEST_URI'];
$page_home = "/venatici-website"; # en servidor cambiar por "/"
$page_empr = "/venatici-website/emprende"; # en servidor cambiar por "/emprende"
$page_mark = "/venatici-website/marketing"; # en servidor cambiar por "/markenting"
$page_web = "/venatici-website/web"; # en servidor cambiar por "/web"
?>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Venatici</title>

  <!-- icon -->
  <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
  <link href="assets/images/favicon.png" rel="apple-touch-icon">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/lib/fontawesome-5.12.1/css/all.css">

  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="assets/lib/MDB-Free-4.14.1/fonts/Roboto-Regular.css">

  <!-- MDBootstrap core CSS -->
  <link rel="stylesheet" type="text/css" href="assets/lib/MDB-Free-4.14.1/css/bootstrap.min.css">

  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="assets/lib/MDB-Free-4.14.1/css/mdb.min.css">

  <!-- Custom CSS -->

  <?php if ($page_url == $page_empr || $page_url == $page_mark || $page_url == $page_web) {
    echo "<link rel='stylesheet' href='assets/css/price-services.css'>";
  } else {
    echo "<link rel='stylesheet' href='assets/css/home.css'>";
  } ?>
  <link rel="stylesheet" href="assets/css/header.css">
  <link rel="stylesheet" href="assets/css/footer.css">
</head>

<body>

  <!-- Navbar -->
  <?php if ($page_url == $page_empr || $page_url == $page_mark || $page_url == $page_web) {
    echo "<nav class='navbar fixed-top navbar-expand-md navbar-dark gray-dark'>";
  } else {
    echo "<nav class='navbar fixed-top navbar-expand-md navbar-dark gray scrolling-navbar'>";
  } ?>
  <div class="container">

    <!-- Brand -->
    <?php if ($page_url == $page_empr || $page_url == $page_mark || $page_url == $page_web) {
      echo "<a class='navbar-brand' href='$page_home'>";
    } else {
      echo "<a class='navbar-brand' href='#home'>";
    } ?>
    <img src="assets/images/favicon.png" height="30" class="d-inline-block align-top" alt="mdb logo">
    <strong>Venatici</strong>
    </a>
    <!-- Brand -->

    <!-- Collapse -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Collapse -->

    <!-- Links -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <!-- Rigth -->
      <ul class="navbar-nav ml-auto">
        <?php if ($page_url == $page_empr || $page_url == $page_mark || $page_url == $page_web) {
          echo "<li class='nav-item'>
                  <a class='nav-link' href='$page_home'>Inicio
                    <span class='sr-only'>(current)</span>
                  </a>
                </li>
                <li class='nav-item'>
                  <a class='nav-link' href='$page_empr'>Inicio Emprende</a>
                </li>
                <li class='nav-item'>
                  <a class='nav-link' href='$page_mark'>Marketing</a>
                </li>
                <li class='nav-item'>
                  <a class='nav-link' href='$page_web'>Páginas Web</a>
                </li>";
        } else {
          echo "<li class='nav-item'>
                  <a class='nav-link' href='#home' data-toggle='collapse' data-target='.navbar-collapse.show'>Inicio
                    <span class='sr-only'>(current)</span>
                  </a>
                </li>
                <li class='nav-item'>
                  <a class='nav-link' href='#section-about-us' data-toggle='collapse' data-target='.navbar-collapse.show'>Sobre nosotros</a>
                </li>
                <li class='nav-item'>
                  <a class='nav-link' href='#section-programs-calls' data-toggle='collapse' data-target='.navbar-collapse.show'>Programas y convocatorias</a>
                </li>
                <li class='nav-item'>
                  <a class='nav-link' href='#section-services' data-toggle='collapse' data-target='.navbar-collapse.show'>Servicios</a>
                </li>
                <li class='nav-item'>
                  <a class='nav-link' href='#section-contact' data-toggle='collapse' data-target='.navbar-collapse.show'>Contacto</a>
                </li>";
        } ?>
      </ul>
      <!-- Rigth -->

    </div>
  </div>
  </nav>
  <!-- Navbar -->

  <!--Main layout-->
  <main>