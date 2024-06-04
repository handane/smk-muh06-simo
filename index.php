<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('./include/meta.php') ?>
    
    
    <style>
      .artikel {
        margin: 0 auto;
        padding: 30px 30px 0 30px;
      }
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
    <?php 
    include('./include/sub-header.php');
    include('./include/header-area.php')
    ?>
    <!-- ***** Header Area Start ***** -->
    
    <!-- ***** Header Area End ***** -->

    <div class="main-banner">
      <div class="owl-carousel owl-banner">
        <div class="item item-1">
          <div class="header-text">
            <h4 style="color: #fff">Selamat Datang di</h4>
            <h1 style="font-size: 40px; color: #fff">SMK MUHAMMADIYAH 06 SIMO</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="artikel">
      <div class="col-xl-12 row">
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
