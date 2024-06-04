<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('./include/meta.php') ?>
    
    <style>
      footer tr td {
        padding: 10px 5px;
      }
      footer .footer-bottom {
        padding-top: 50px;
        color: white;
        font-size: 12px;
      }
      .tb-2 td {
        padding-top: 8px;
        padding-left: 20px;
      }
      footer p {
        font-size: 12px;
      }
    </style>
  </head>

  <body>
    <!-- ***** Preloader Start ***** -->
    <!-- ***** Preloader End ***** -->

    <?php include('./include/sub-header.php') ?>
    

    <!-- ***** Header Area Start ***** -->
    <?php include('./include/header-area.php') ?>
    
    <!-- ***** Header Area End ***** -->

    <div class="main-banner-2">
      <div class="owl-carousel owl-banner">
        <div class="item item-2">
          <div class="header-text">
            <h1>Fasilitas SMK MUH 06 SIMO</h1>
            <br />
            <span>Profil > </span>
            <span>Fasilitas Sekolah </span>
          </div>
        </div>
      </div>
    </div>

    <div class="artikel">
      <div class="col-xl-12 row">
        <div class="col-xl-3">
          <?php include('./include/sidebar-profil.php') ?>
        </div>
        <div class="col-xl-9">
          <div class="card card-body">
            <p style="text-align: justify">
            Gedung Milik Sendiri, dengan luas lahan kurang lebih 5000 M2
            </p>
          </div>
        </div>
      </div>
    </div>

    <footer>
      <?php include('./include/footer.php') ?>
    </footer>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/counter.js"></script>
    <script src="assets/js/custom.js"></script>
  </body>
</html>
