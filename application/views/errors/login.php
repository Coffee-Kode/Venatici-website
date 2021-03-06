<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Rendición Sostenedor</title>
  <link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/icono.ico">

  <!-- Bootstrap CSS -->
  <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Font Awesome -->
  <link href="<?php echo base_url() ?>assets/font/css/all.css" rel="stylesheet" />

  <!-- Custom CSS -->
  <link href="<?php echo base_url() ?>assets/css/custom.css" rel="stylesheet" />

  <!-- jQuery v3.3.1 -->
  <script src="<?php echo base_url() ?>assets/js/jquery.min.js" type="text/javascript"></script>

  <!-- Bootstrap JS -->
  <script src="<?php echo base_url() ?>assets/js/popper/popper.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js" type="text/javascript"></script>

  <!-- Sweet Alert -->
  <script src="<?php echo base_url() ?>assets/js/sweetalert.min.js" type="text/javascript"></script>

  <!-- Custom jQuery -->
  <script src="<?php echo base_url() ?>assets/js/custom/login.js" type="text/javascript"></script>
</head>

<body class="text-center login-body">
  <div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">
      <div class="card card-opacity mb-3 col-md-4">
        <div class="card-body">
          <p class="card-text">
            <h3 class="card-title">Iniciar Sesión</h3>
            <br>
          </p>
          <p class="card-text">
            <input id="mail" class="form-control" placeholder="Correo" required="" autofocus="" type="email">
            <br>
            <input id="pass" class="form-control" placeholder="Contraseña" required="" type="password">
            <br>
            <select class="form-control" id="periodo">
              <option value="18">2018</option>
              <option value="19" selected>2019</option>
            </select>
            <br>
            <button id="btn_login" class="btn btn-lg btn-primary btn-block">Ingresar</button>
          </p>
          <p class="card-text">
            <small class="text-muted">© rendicionsostenedor.cl 2019</small>
            <br>
            <small class="text-muted">v.3.18</small>
          </p>
        </div>
      </div>
    </div>
</body>

</html>