<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <title>Venatici Privado</title>
  <link href="assets/images/favicon.png" rel="icon">
  <link href="assets/images/favicon.png" rel="apple-touch-icon">

  <link rel="stylesheet" href="assets/fonts/Karla-font/Karla.css">
  <link rel="stylesheet" href="assets/lib/bootstrap-4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/login.css">
</head>

<body>
  <main>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 login-section-wrapper">
          <div class="brand-wrapper">
            <img src="assets/images/logo.png" alt="logo" class="logo">
          </div>
          <div class="login-wrapper my-auto">
            <h1 class="login-title">Portal Privado</h1>
            <form action="#!">
              <div class="form-group">
                <label for="email">Correo</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Correo">
              </div>
              <div class="form-group mb-4">
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña">
              </div>
              <input name="login" id="btn_login" class="btn btn-block login-btn" type="button" value="Ingresar">
            </form>
            <a onclick="history.back(-1)" href="#" class="login-wrapper-footer-text">volver</a>
          </div>
        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block">
          <img src="assets/images/login.jpg" alt="login image" class="login-img">
        </div>
      </div>
    </div>
  </main>

  <script src="assets/lib/jquery-3.4.1/jquery-3.4.1.min.js"></script>
  <script src="assets/lib/popper-1.12.9/popper.min.js"></script>
  <script src="assets/lib/bootstrap-4.4.1/js/bootstrap.min.js"></script>
  <script src="assets/js/login.js"></script>
</body>

</html>