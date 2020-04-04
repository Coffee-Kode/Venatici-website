<!-- Full Page Intro -->
<div id="home" class="view full-page-intro bg-img">
    <!-- Text main image-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
        <!-- Content -->
        <div class="container">
            <!--Grid row-->
            <div class="row wow fadeIn">
                <!--Grid column-->
                <div class="col-md-6 white-text text-center text-md-left pt-5">
                    <img src="assets/images/img-logo.png" height="100" class="d-inline-block align-top" alt="mdb logo">
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Content -->
    </div>
    <!-- Mask & flexbox options-->
</div>
<!-- Full Page Intro -->

<div class="container">
    <!-- Start Section: About Us -->
    <section id="section-about-us" class="area pt-5">
        <h1 id="title_about_us" class="h1 text-center">Sobre nosotros</h1>
        <!--Grid row-->
        <div class="row wow fadeIn mt-3">
            <!-- Start Column img about-us -->
            <div class="d-none d-md-block col-md-4 ">
                <img src="assets/images/img-about-us.jpg" class="rounded img-fluid z-depth-1-half mb-4" alt="responsive">
            </div>
            <!-- Finish column img about-us -->
            <!--Grid column-->
            <div class="col-md-8 ">
                <!--First row About Us-->
                <div class="row">
                    <div class="col-1 mr-1">
                        <i class="fas fa-users fa-2x indigo-text"></i>
                    </div>
                    <div class="col-10">
                        <h5 class="feature-title">Sobre Nosotros</h5>
                        <p id="about_us" class="grey-text justify-content-center"></p>
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
                        <p id="mission" class="grey-text"></p>
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
                        <p id="vision" class="grey-text"></p>
                    </div>
                </div>
                <!--/Third row-->
            </div>
            <!--/Grid column-->
        </div>
        <!--/Grid row-->
    </section>
    <!--Finish Section: About Us-->

    <hr>

    <!-- Start Section: Programs and calls-->
    <section id="section-programs-calls" class="area pt-5">
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h1 id="title_services" class="h1 text-center">Programas y Convocatorias</h1>
                    <p id="programs" class="grey-text text-center mb-2"></p>
                </div>
                <div class="col-12">
                    <!-- Start Section: Programs and calls-->
                    <div id="carousel-1" class="carousel slide carousel-fade " data-ride="carousel">
                        <!--Indicators-->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-1" data-slide-to="1"></li>
                            <li data-target="#carousel-1" data-slide-to="2"></li>
                        </ol>
                        <!--/.Indicators-->
                        <!--Slides-->
                        <div id="carousel" class="carousel-inner mt-3 z-depth-5" role="listbox">
                        </div>
                        <!--/.Slides-->
                        <!--Controls-->
                        <a class="carousel-control-prev grey-text" href="#carousel-1" role="button" data-slide="prev">
                            <span aria-hidden="true"><i class="fas fa-angle-left fa-3x"></i></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next grey-text" href="#carousel-1" role="button" data-slide="next">
                            <span aria-hidden="true"><i class="fas fa-angle-right fa-3x"></i></span>
                            <span class="sr-only">Next</span>
                        </a>
                        <!--/.Controls-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Finish Section: Programs and calls-->

    <hr>

    <!--Start Section: Services-->
    <section id="section-services" class="area pt-5">
        <div class="container">
            <div class="text-center">
                <h1 id="title_services" class="h1 text-center">Nuestros Servicios</h1>
            </div>
            <div id="services" class="row text-center mt-4">
            </div>
        </div>
    </section>
    <!-- Finish Section: Service -->

    <hr>

    <!--Section: Contact-->
    <section id="section-contact" class="area pt-5">
        <div class="container">
            <div class="text-center">
                <h1>Contáctanos</h1>
                <p id="programs" class="grey-text mb-2">
                    Mantente en contacto con nosotros, si deseas más información sobre alguno de nuestros servicios puedes ocupar nuestros canales de comunicación que tenemos a tu disposición y te responderemos a la brevedad.
                </p>
            </div>
            <div class="row mt-5">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-body text-left">
                            <div class="form-header bg-primary">
                                <h3><i class="fas fa-envelope"></i> Escríbenos</h3>
                            </div>
                            <div class="md-form">
                                <i class="fas fa-user prefix grey-text"></i>
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
                                <button id="btn_send" class="btn btn-outline-primary rounded-pill">Enviar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div id="map-container-google-11" class="z-depth-1-half map-container-6" style="height: 400px; min-width: 100%;">
                        <iframe src="https://maps.google.com/maps?q=-35.4266305,-71.6661153&ie=UTF8&t=&z=15&iwloc=A&output=embed" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <hr>
                    <div class="row text-center mt-4">
                        <div class="col-md-4">
                            <i class="fas fa-map-marker-alt"></i>
                            <p>Talca, Región del Maule</p>
                            <p>Chile</p>
                        </div>
                        <div class="col-md-3">
                            <i class="fas fa-phone"></i>
                            <p>+56 9 7358 6517</p>
                            <p>+56 9 9911 1915</p>
                        </div>
                        <div class="col-md-5">
                            <i class="fas fa-envelope"></i>
                            <p>venatici.asesorias@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Section: Contact-->
</div>