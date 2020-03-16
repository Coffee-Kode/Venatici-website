<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Venatici Admin</title>
    <link href="assets/images/favicon.png" rel="icon">
    <link href="assets/images/favicon.png" rel="apple-touch-icon">

    <!-- START CSS Dependencies -->
    <link rel="stylesheet" href="assets/lib/bootswatch-lux/bootstrap.min.css">
    <link rel="stylesheet" href="assets/lib/fontawesome-5.12.1/css/all.min.css">
    <link rel="stylesheet" href="assets/css/autoadmin.css">
    <!-- END CSS Dependencies -->

</head>

<body>
    <!-- START NAVBAR -->
    <div class="navbar-dark bg-dark sticky-top">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="home">
                <img src="assets/images/ic_venatici.jpg" width="30" height="30" class="d-inline-block align-top mr-2 rounded" alt="">
                Venatici</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="logout">Salir</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- END NAVBAR -->

    <!-- START FORM AUTOADMIN -->
    <div class="container">
        <div class="jumbotron mt-4">
            <h1 class="display-5">Bienvenido a Venatici Admin</h1>
            <p class="lead">Administre la información de su sitio web desde los siguientes formularios:</p>
            <hr class="my-4">
            <div class="accordion" id="accordion">
                <!-- START CARD INICIO -->
                <div class="card">
                    <div class="card-header" id="heading1">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                Inicio
                            </button>
                        </h2>
                    </div>
                    <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordion">
                        <div class="card-body">
                            ...
                        </div>
                    </div>
                </div>
                <!-- END CARD INICIO -->
                <!-- START CARD SOBRE NOSOTROS -->
                <div class="card">
                    <div class="card-header" id="heading2">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                                Sobre Nosotros
                            </button>
                        </h2>
                    </div>
                    <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion">
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label for="about_us">Quienes somos</label>
                                    <textarea class="form-control" id="about_us" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="mission">Misión</label>
                                    <textarea class="form-control" id="mission" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="vision">Visión</label>
                                    <textarea class="form-control" id="vision" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="button" id="btn_about" class="btn btn-success float-right mb-4">Guardar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- END CARD SOBRE NOSOTROS -->
                <!-- START CARD SERVICIOS: INICIO EMPRENDE -->
                <div class="card">
                    <div class="card-header" id="heading3">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                Servicios > Inicio Emprende
                            </button>
                        </h2>
                    </div>
                    <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="plan_inicia_text">Titulo</label>
                                <input class="form-control" type="text" id="plan_inicia_text">
                            </div>

                            <div class="form-group">
                                <label for="plan_inicia_text">Descripción</label>
                                <textarea class="form-control" id="vision" rows="3">Queremos ser la mejor opción para aquellos emprendedores y empresarios que necesitan una mejora en marketing y posicionamiento a nivel nacional</textarea>
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-success float-right mb-4">Guardar</button>
                            </div>
                            <!--
                            <div class="form-group">
                                <div class="row mt-4">
                                    <div class="col-md-8">
                                        <label for="plan_inicia_text">Descripción</label>
                                        <input class="form-control" type="text" id="plan_inicia_text">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="plan_inicia_value">Monto</label>
                                        <input class="form-control" type="text" id="plan_inicia_value">
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <button type="button" class="btn btn-success float-right mt-2">Agregar</button>
                                    </div>
                                </div>
                            </div>
                        -->
                            <div class="form-group">
                                <table class="table table-striped table-sm mt-4" id="plan_inicia_table">
                                    <thead>
                                        <tr>
                                            <th class="col-md-6" scope="col">Descripción</th>
                                            <th class="col-md-2" scope="col">Monto</th>
                                            <th class="col-md-4" scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="col-md-6">Sociedades: Preparación de escrituras y
                                                Obtención de rut</td>
                                            <td class="col-md-2" align="right">$35.000</td>
                                            <td class="col-md-2" align="right">
                                                <a href="#"><i class="fas fa-edit"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-6">Habilitación PYME: Inicio de actividades,
                                                Obtención de clave, Instalación de certificado para facturación
                                                electrónica, acreditación de domicilio y actividad.</td>
                                            <td class="col-md-2" align="right">$50.000</td>
                                            <td class="col-md-2" align="right">
                                                <a href="#"><i class="fas fa-edit"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-6">Imagen y logotipo</td>
                                            <td class="col-md-2" align="right">$35.000</td>
                                            <td class="col-md-2" align="right">
                                                <a href="#"><i class="fas fa-edit"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-6">Registro de marca</td>
                                            <td class="col-md-2" align="right">$35.000</td>
                                            <td class="col-md-2" align="right">
                                                <a href="#"><i class="fas fa-edit"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-6">Fondos concursables</td>
                                            <td class="col-md-2" align="right">$50.000</td>
                                            <td class="col-md-2" align="right">
                                                <a href="#"><i class="fas fa-edit"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-info float-right mb-4">Nuevo Registro</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END CARD SERVICIOS: INICIO EMPRENDE -->
                <!-- START CARD SERVICIOS: MARKETING -->
                <div class="card">
                    <div class="card-header" id="heading4">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                Servicios > Marketing Digital
                            </button>
                        </h2>
                    </div>
                    <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion">
                        <div class="card-body">
                            ...
                        </div>
                    </div>
                </div>
                <!-- END CARD SERVICIOS: MARKETING -->
                <!-- START CARD SERVICIOS: PAGINAS WEB -->
                <div class="card">
                    <div class="card-header" id="heading5">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                Servicios > Paginas Web
                            </button>
                        </h2>
                    </div>
                    <div id="collapse5" class="collapse" aria-labelledby="heading4" data-parent="#accordion">
                        <div class="card-body">
                            ...
                        </div>
                    </div>
                </div>
                <!-- END CARD SERVICIOS: PAGINAS WEB -->
            </div>
        </div>
    </div>
    <!-- END FORM AUTOADMIN -->

    <!-- START JS Dependencies -->
    <script src="assets/lib/jquery-3.4.1/jquery-3.4.1.min.js"></script>
    <script src="assets/lib/popper-1.12.9/popper.min.js"></script>
    <script src="assets/lib/bootstrap-4.4.1/js/bootstrap.min.js"></script>
    <script src="assets/js/autoadmin.js"></script>
    <!-- END JS Dependencies -->

</body>

</html>