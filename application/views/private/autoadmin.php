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
    <link rel="stylesheet" type="text/css" href="assets/lib/bootswatch/bootstrap-cosmo.min.css" id="link_css">
    <link rel="stylesheet" type="text/css" href="assets/lib/fontawesome-5.12.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/lib/css-loader-3.3.2/loader-bouncing.css">
    <link rel="stylesheet" type="text/css" href="assets/css/autoadmin.css">
    <!-- END CSS Dependencies -->
</head>

<body>
    <!-- START LOADER -->
    <div id="loader" class="loader loader-bouncing is-active"></div>
    <!-- END LOADER -->

    <!-- START NAVBAR -->
    <div class="navbar-dark bg-dark sticky-top">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="home">
                <img src="assets/images/ic_venatici.jpg" width="30" height="30" class="d-inline-block align-top mr-2 rounded" alt="">
                Venatici</a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="logout">Salir</a>
                </li>
            </ul>
        </nav>
    </div>
    <!-- END NAVBAR -->

    <!-- START FORM AUTOADMIN -->
    <div class="container">
        <div class="jumbotron mt-4">
            <!-- START DARK MODE -->
            <div class="float-right mt-3">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="darkSwitch">
                    <label class="custom-control-label" for="darkSwitch">Modo Oscuro</label>
                </div>
            </div>
            <!-- END DARK MODE -->
            <!-- START HEADER -->
            <h1 class="display-5">Bienvenido a Venatici Admin</h1>
            <p class="lead">Administre la información de su sitio web desde los siguientes formularios:</p>
            <!-- END HEADER -->
            <hr class="my-4">
            <!-- START BODY -->
            <div class="accordion" id="accordion">
                <!-- START CARD SOBRE NOSOTROS -->
                <div class="card">
                    <div class="card-header" id="heading2">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                Sobre Nosotros
                            </button>
                        </h2>
                    </div>
                    <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordion">
                        <div class="card-body">
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
                        </div>
                    </div>
                </div>
                <!-- END CARD SOBRE NOSOTROS -->
                <!-- START CARD PROGRAMAS -->
                <div class="card">
                    <div class="card-header" id="heading1">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                Programas y Convocatorias
                            </button>
                        </h2>
                    </div>
                    <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion">
                        <div class="card-body">
                            <div class="list-group">
                                <div class="list-group-item">
                                    <div class="form-group">
                                        <label for="programs">Descripción</label>
                                        <textarea class="form-control" id="programs" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="button" id="btn_programs" class="btn btn-success float-right mb-4">Guardar
                                        </button>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <h5 class="mb-5">Imagenes del caroussel:</h5>
                                    <form id="form_img">
                                        <div class="form-row">
                                            <div class="col-md-5">
                                                <input type="file" class="form-control-file" name="img_carousel" id="img_carousel" aria-describedby="img_help" accept="image/png, image/jpeg">
                                                <small id="img_help" class="form-text text-muted">Formato admitido:
                                                    JPEG/PNG de 1200x400 pixeles y 2MB Max.</small>
                                            </div>
                                            <div class="col-md-7">
                                                <button type="button" id="btn_add_img" class="btn btn-warning">Agregar</button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="form-group">
                                        <table class="table table-striped table-sm mt-4">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Archivo</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tbody_img">
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END CARD PROGRAMAS -->
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
                            <div class="list-group">
                                <div class="list-group-item">
                                    <div class="form-group">
                                        <label for="plan_inicia_text">Título</label>
                                        <input class="form-control" type="text" id="title_service_1">
                                    </div>
                                    <div class="form-group">
                                        <label for="plan_inicia_text">Descripción</label>
                                        <textarea class="form-control" id="description_service_1" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="button" class="btn btn-success float-right mb-4" id="btn_services_1">Guardar</button>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <h5 class="mb-1">Planes Inicio Emprende:</h5>
                                    <div class="form-group">
                                        <table class="table table-striped table-sm mt-4">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Título</th>
                                                    <th scope="col">Descripción (Opcional)</th>
                                                    <th scope="col">Monto</th>
                                                    <th scope="col"></th>
                                                </tr>
                                            </thead>
                                            <tbody id="tbody_plans_1">
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
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
                            <div class="list-group">
                                <div class="list-group-item">
                                    <div class="form-group">
                                        <label for="plan_inicia_text">Título</label>
                                        <input class="form-control" type="text" id="title_service_2">
                                    </div>
                                    <div class="form-group">
                                        <label for="plan_inicia_text">Descripción</label>
                                        <textarea class="form-control" id="description_service_2" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="button" class="btn btn-success float-right mb-4" id="btn_services_2">Guardar</button>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <h5 class="mb-1">Planes Marketing Digital:</h5>
                                    <div class="form-group">
                                        <table class="table table-striped table-sm mt-4" style="border-collapse:collapse;">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Título</th>
                                                    <th scope="col">Descripción (Opcional)</th>
                                                    <th scope="col">Monto</th>
                                                    <th scope="col"></th>
                                                </tr>
                                            </thead>
                                            <tbody id="tbody_plans_2">
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
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
                    <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordion">
                        <div class="card-body">

                            <div class="list-group">
                                <div class="list-group-item">
                                    <div class="form-group">
                                        <label for="plan_inicia_text">Título</label>
                                        <input class="form-control" type="text" id="title_service_3">
                                    </div>
                                    <div class="form-group">
                                        <label for="plan_inicia_text">Descripción</label>
                                        <textarea class="form-control" id="description_service_3" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="button" class="btn btn-success float-right mb-4" id="btn_services_3">Guardar</button>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <h5 class="mb-1">Planes Paginas Web:</h5>
                                    <div class="form-group">
                                        <table class="table table-striped table-sm mt-4" style="border-collapse:collapse;">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Título</th>
                                                    <th scope="col">Descripción (Opcional)</th>
                                                    <th scope="col">Monto</th>
                                                    <th scope="col"></th>
                                                </tr>
                                            </thead>
                                            <tbody id="tbody_plans_3">
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END CARD SERVICIOS: PAGINAS WEB -->
                <!-- START CARD CONTACTO -->
                <div class="card">
                    <div class="card-header" id="heading6">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                Contacto
                            </button>
                        </h2>
                    </div>
                    <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordion">
                        <div class="card-body">
                            <div class="list-group">
                                <div class="list-group-item">
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="contact_description">Descripción</label>
                                            <textarea class="form-control" id="contact_description" rows="3"></textarea>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="contact_address">Dirección</label>
                                            <input class="form-control" type="text" id="contact_address">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="contact_email">Correo contacto</label>
                                            <input class="form-control" type="text" id="contact_email">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="contact_maps">URL Google Maps</label>
                                            <input class="form-control" type="text" id="contact_maps">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="contact_phone_1">Numero 1</label>
                                            <input class="form-control" type="text" id="contact_phone_1">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="contact_phone_2">Numero 2</label>
                                            <input class="form-control" type="text" id="contact_phone_2">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="contact_facebook">Facebook</label>
                                            <input class="form-control" type="text" id="contact_facebook">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="contact_instagram">Instagram</label>
                                            <input class="form-control" type="text" id="contact_instagram">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <button type="button" class="btn btn-success float-right mt-4" id="btn_contact">Guardar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END CARD CONTACTO -->
            </div>
            <!-- END BODY -->
        </div>
    </div>
    <!-- END FORM AUTOADMIN -->

    <!-- START MODALS SECTIONS -->
    <div>
        <!-- START MODAL EDIT PLANS -->
        <div class="modal fade" id="modal_edit_plans" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="modal_edit_plans_label" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal_edit_plans_label">Modificar Plan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="plan_title">Título</label>
                            <input type="text" class="form-control" id="plan_title">
                            <input style="display: none;" id="plan_id">
                        </div>
                        <div class="form-group">
                            <label for="plan_description">Descripción</label>
                            <textarea class="form-control" id="plan_description" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="plan_cost">Monto</label>
                            <input type="text" class="form-control" id="plan_cost">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-success" id="btn_plans">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MODAL EDIT PLANS -->

        <!-- START MODAL ADD DETAILS PLANS -->
        <div class="modal fade" id="modal_add_details" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="modal_add_details_label" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal_add_details_label">Agregar detalle al plan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="detail_description">Descripción</label>
                            <input type="text" class="form-control" id="detail_description">
                            <input style="display: none;" id="detail_id_plans">
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" checked id="detail_switch">
                                <label class="custom-control-label" for="detail_switch">Incluido en el plan</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-success" id="btn_add_detail">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MODAL ADD DETAILS PLANS -->

        <!-- START MODAL EDIT DETAILS PLANS -->
        <div class="modal fade" id="modal_edit_details" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="modal_edit_details_label" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal_edit_details_label">Modificar detalle del plan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="edit_detail_description">Descripción</label>
                            <input type="text" class="form-control" id="edit_detail_description">
                            <input style="display: none;" id="edit_detail_id">
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="edit_detail_switch">
                                <label class="custom-control-label" for="edit_detail_switch">Incluido en el plan</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-success" id="btn_detail">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MODAL EDIT DETAILS PLANS -->

        <!-- START MODAL DELETE DETAILS PLANS -->
        <div class="modal fade" id="modal_delete_details" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="modal_delete_details_label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal_delete_details_label">¿Desea eliminar el detalle?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-row mb-2 mt-1">
                            <input style="display: none;" id="delete_detail_id">
                            <div class="col-md-4 offset-md-1">
                                <button type="button" class="btn btn-info btn-block" data-dismiss="modal">No</button>
                            </div>
                            <div class="col-md-4 offset-md-2">
                                <button type="button" class="btn btn-danger btn-block" id="btn_delete_detail">Si</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MODAL DELETE DETAILS PLANS -->

        <!-- START MODAL IMAGES -->
        <div class="modal fade" id="modal_view_img" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="modal_view_img_label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">
                    <div id="modal_img" class="modal-body mb-0 p-0">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary mr-auto" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-danger" data-target="#modal_confirm_delete_details" data-toggle="modal" id="btn_confirm_delete_img">Eliminar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MODAL IMAGES -->

        <!-- START MODAL CONFIRM DELETE DETAILS PLANS -->
        <div class="modal fade" id="modal_confirm_delete_details" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="modal_confirm_delete_details_label" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal_confirm_delete_details_label">¿Desea eliminar la imagen?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-row mb-2 mt-1">
                            <div style="display: none;" id="div_confirm_delete_img"></div>
                            <div class="col-md-4 offset-md-1">
                                <button type="button" class="btn btn-info btn-block" data-dismiss="modal">No</button>
                            </div>
                            <div class="col-md-4 offset-md-2">
                                <button type="button" class="btn btn-danger btn-block" id="btn_delete_img">Si</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MODAL CONFIRM DELETE DETAILS PLANS -->
    </div>
    <!-- END MODALS SECTIONS -->

    <!-- START JS Dependencies -->
    <script src="assets/lib/jquery-3.4.1/jquery-3.4.1.min.js"></script>
    <script src="assets/lib/popper-1.12.9/popper.min.js"></script>
    <script src="assets/lib/bootstrap-4.4.1/js/bootstrap.min.js"></script>
    <script src="assets/js/autoadmin.js"></script>
    <!-- END JS Dependencies -->
</body>

</html>