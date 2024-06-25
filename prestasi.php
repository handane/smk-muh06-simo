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

    <?php include('./include/sub-header.php') ?>
    
    <?php include('./include/header-area.php') ?>
    
    <!-- ***** Header Area End ***** -->

    <div class="main-banner-2">
      <div class="owl-carousel owl-banner">
        <div class="item item-2">
          <div class="header-text">
            <h1>Prestasi SMK MUH 06 SIMO</h1>
            <br />
            <span>Profil > </span>
            <span>Prestasi Sekolah </span>
          </div>
        </div>
      </div>
    </div>

    <div class="artikel">
      <div class="col-xl-12 row">
        <div class="col-xl-3">
          <?php include('./include/sidebar-profil.php') ?>
        </div>
        <div class="col-md-9">
          <h6 class="mb-4">Berikut beberapa prestasi yang telah diraih oleh siswa siswi SMK Muh 06 Simo yang sangat membanggakan:</h6>
          <div class="col-md-12 row">
            <div class="col-md-5 border border-1 card card-body m-2">
              <img src="./assets/images/WhatsApp Image 2024-06-12 at 19.17.38.jpeg" alt="">
            </div>
            <div class="col-md-5 border border-1 card card-body m-2">
              <img src="./assets/images/WhatsApp Image 2024-06-12 at 19.17.46.jpeg" alt="">
            </div>
            <div class="col-md-5 border border-1 card card-body m-2">
              <img src="./assets/images/WhatsApp Image 2024-06-12 at 19.17.56.jpeg" alt="">
            </div>
            <div class="col-md-5 border border-1 card card-body m-2">
              <img src="./assets/images/WhatsApp Image 2024-06-12 at 19.18.21.jpeg" alt="">
            </div>
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
