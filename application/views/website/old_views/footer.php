</main>
<!--Main layout-->

<!--Footer-->
<footer id="section-footer" class="sticky-bottom page-footer bg-dark font-small wow fadeIn pt-3">

  <!-- Start Contact-->
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <a href="home">
          <img src="assets/images/img-logo.png" height="90" class="d-inline-block align-top" alt="mdb logo">
        </a>

      </div>
      <div class="col-lg-4">
        <h3 class="h3">Contacto</h3>
        <hr class="hr-light">
        <p><i class="fas fa-map-marker-alt mr-3"></i><label id="footer_address"></label></p>
        <p><i class="fab fa-whatsapp mr-3"></i><label id="footer_phone"></label></p>
        <p id="footer_email"></p>
      </div>
      <div class="col-lg-4">
        <h3 class="h3">Síguenos</h3>
        <hr class="hr-light">
        <div id="rrss"></div>
      </div>
    </div>
  </div>
  <!--/ Finish Contact-->

  <!--Copyright-->
  <div class="footer-copyright py-3 text-right pr-4">
    © 2020 Copyright:
    <a href="https://coffeekode.cl/" target="_blank"> Desarrolado por CoffeKode </a>
  </div>
  <!--/.Copyright-->

</footer>
<!--/.Footer-->
<?php
$page_url = $_SERVER['REQUEST_URI'];
$page_home = "/venatici-website"; # en servidor cambiar por "/"
$page_empr = "/venatici-website/emprende"; # en servidor cambiar por "/emprende"
$page_mark = "/venatici-website/marketing"; # en servidor cambiar por "/markenting"
$page_web = "/venatici-website/web"; # en servidor cambiar por "/web"
?>

<!-- jQuery -->
<script type="text/javascript" src="assets/lib/MDB-Free-4.14.1/js/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="assets/lib/MDB-Free-4.14.1/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="assets/lib/MDB-Free-4.14.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="assets/lib/MDB-Free-4.14.1/js/mdb.min.js"></script>

<!-- Custom JavaScript -->
<script type="text/javascript" src="assets/js/effect-navbar.js"></script>
<script type="text/javascript" src="assets/js/transition.js"></script>
<?php if ($page_url == $page_empr) {
  echo "<script type='text/javascript' src='assets/js/emprende.js'></script>";
} else if ($page_url == $page_mark) {
  echo "<script type='text/javascript' src='assets/js/marketing.js'></script>";
} else if ($page_url == $page_web) {
  echo "<script type='text/javascript' src='assets/js/develop_web.js'></script>";
} else {
  echo "<script type='text/javascript' src='assets/js/home.js'></script>";
} ?>
<script type='text/javascript' src='assets/js/footer.js'></script>

</body>

</html>