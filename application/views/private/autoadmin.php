<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/bdc9f861db.js" crossorigin="anonymous"></script>

    <title>Venatici Admin</title>
    <link href="assets/images/favicon.png" rel="icon">
    <link href="assets/images/favicon.png" rel="apple-touch-icon">

    <style>
        body {
            background: #E0EAFC;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #CFDEF3, #E0EAFC);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #CFDEF3, #E0EAFC);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Venatici admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02"
            aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Salir</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="jumbotron mt-4">
            <h1 class="display-5">Bienvenido a Venatici Admin</h1>
            <p class="lead">Administre la información de su sitio web desde los siguientes formularios:</p>
            <hr class="my-4">
            <div class="accordion" id="accordion">
                <div class="card">
                    <div class="card-header" id="heading1">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
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
                <div class="card">
                    <div class="card-header" id="heading2">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse2"
                                aria-expanded="true" aria-controls="collapse2">
                                Sobre Nosotros
                            </button>
                        </h2>
                    </div>
                    <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion">
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label for="about_us">Quienes somos</label>
                                    <textarea class="form-control" id="about_us"
                                        rows="3">Somos una compañía dedicada a contribuir en el desarrollo de emprendimientos tempranos y empresas que necesitan lograr su consolidación en la industria, aportando con servicios dedicados a las distintas etapas del ciclo de vida, comenzando con su constitución y formalización hasta la inteligencia comercial por medio de herramientas de marketing. Para esto contamos con un equipo de profesionales capacitados para entregar un servicio óptimo y dedicado a cada uno de nuestros clientes, acompañándolos y resolviendo todas sus necesidades.</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="mission">Misión</label>
                                    <textarea class="form-control" id="mission"
                                        rows="3">Contribuir al desarrollo empresarial y de emprendimiento a través de la asesoría y soporte técnico  que requieran para su crecimiento  </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="vision">Visión</label>
                                    <textarea class="form-control" id="vision"
                                        rows="3">Queremos ser la mejor opción para aquellos emprendedores y empresarios que necesitan una mejora en marketing y posicionamiento a nivel nacional</textarea>
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn btn-success float-right mb-4">Guardar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="heading3">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
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
                                <textarea class="form-control" id="vision"
                                    rows="3">Queremos ser la mejor opción para aquellos emprendedores y empresarios que necesitan una mejora en marketing y posicionamiento a nivel nacional</textarea>
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
                                                <a href="#" style="color:darkcyan"><i class="fas fa-edit"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-6">Habilitación PYME: Inicio de actividades,
                                                Obtención de clave, Instalación de certificado para facturación
                                                electrónica, acreditación de domicilio y actividad.</td>
                                            <td class="col-md-2" align="right">$50.000</td>
                                            <td class="col-md-2" align="right">
                                                <a href="#" style="color:darkcyan"><i class="fas fa-edit"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-6">Imagen y logotipo</td>
                                            <td class="col-md-2" align="right">$35.000</td>
                                            <td class="col-md-2" align="right">
                                                <a href="#" style="color:darkcyan"><i class="fas fa-edit"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-6">Registro de marca</td>
                                            <td class="col-md-2" align="right">$35.000</td>
                                            <td class="col-md-2" align="right">
                                                <a href="#" style="color:darkcyan"><i class="fas fa-edit"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-6">Fondos concursables</td>
                                            <td class="col-md-2" align="right">$50.000</td>
                                            <td class="col-md-2" align="right">
                                                <a href="#" style="color:darkcyan"><i class="fas fa-edit"></i></a>
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
                <div class="card">
                    <div class="card-header" id="heading4">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
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
                <div class="card">
                    <div class="card-header" id="heading5">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
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
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>