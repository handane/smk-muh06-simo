<?php
session_start();
include("./database/db.php");
if (!isset($_SESSION["calon_siswa"])) {
   echo "<script>location='login.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('./include/meta.php') ?>
    
    <style>
      .form-ppdb table tr td{
        padding: 8px 8px;
      }
      .kanan {
        padding-left: 10px;
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
      th {
        color: dimgrey;
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
            <h2>DATA CALON SISWA BARU</h2>
            <br />
            <span>PPDB > </span>
            <span>Data Pendaftaran </span>
          </div>
        </div>
      </div>
    </div>

    <div class="">
      <div class="col-xl-12 row">
        <div class="col-xl-2 artikel">
          <?php include('./include/sidebar-ppdb.php') ?>
        </div>
        
        <?php 
                $id_user = $_SESSION['calon_siswa']['id_user_calon_siswa'];
                $get_paket = mysqli_query($conn, "SELECT * FROM calon_siswa WHERE id_user_calon_siswa = $id_user");
                $p = mysqli_fetch_array($get_paket);
                $row = mysqli_num_rows($get_paket);
              ?>
        <div class="col-xl-10">
          <div class="card card-body mt-5">
          <?php 
            if($row < 1) {
          ?>
          <p>Belum ada data terisi</p>
          <?php }else { ?>
            <h5 class="mb-5 m-auto">DATA CALON SISWA</h5>
            <form action="ppdb-post.php" class="row col-md-12" method="post">
              <h6 class="mb-3">Keterangan Pribadi</h6>
              <div class="form-ppdb col-md-6">
                <table class="col-md-12">
                  <tr>
                    <th>Nama</th>
                    <td><?php echo $p['nama'] ?>
                    </td>
                  </tr>
                  <tr>
                    <th>Jenis Kelamin</th>
                    <td><?php echo $p['jenis_kelamin'] ?>
                  </tr>
                  <tr>
                    <th>Tempat Lahir</th>
                    <td><?php echo $p['tempat_lahir'] ?>
                  </tr>
                  <tr>
                    <th>Tanggal Lahir</th>
                    <td><?php echo $p['tanggal_lahir'] ?>
                  </tr>
                  <tr>
                    <th>Agama</th>
                    <td><?php echo $p['agama'] ?>
                  </tr>
                </table>
              </div>
              <div class="form-ppdb col-md-6 kanan">
                <table class="col-md-12">
                  <tr>
                    <th>Alamat Sekarang</th>
                    <td><?php echo $p['alamat_sekarang'] ?>
                  </tr>
                  <tr>
                    <th>No. Telepon</th>
                    <td><?php echo $p['no_telepon'] ?>
                  </tr>
                  <tr>
                    <th>NISN</th>
                    <td><?php echo $p['nik'] ?>
                  </tr>
                  <tr>
                    <th>No. KK</th>
                    <td><?php echo $p['kk'] ?>
                  </tr>
                </table>
              </div>
              <h6 class="mt-5 mb-3">Pendidikan</h6>
              <div class="form-ppdb col-md-6">
                <table class="col-md-12">
                  <tr>
                    <th>Sekolah Asal</th>
                    <td><?php echo $p['sekolah_asal'] ?>
                  </tr>
                  <tr>
                    <th>Alamat Sekolah</th>
                    <td><?php echo $p['alamat_sekolah'] ?>
                  </tr>
                </table>
              </div>
              <div class="form-ppdb col-md-6 kanan">
                <table class="col-md-12">
                  <tr>
                    <th>Nilai Rata-rata SKHUN</th>
                    <td><?php echo $p['skhun'] ?>
                  </tr>
                  <tr>
                    <th>Jurusan</th>
                    <td><?php echo $p['jurusan'] ?>
                  </tr>
                </table>
              </div>
              <h6 class="mt-5 mb-3">Orang Tua</h6>
              <div class="form-ppdb col-md-6">
                <table class="col-md-12">
                  <tr>
                    <th>Nama Ayah</th>
                    <td><?php echo $p['nama_ayah'] ?>
                  </tr>
                  <tr>
                    <th>Nama Ibu</th>
                    <td><?php echo $p['nama_ibu'] ?>
                  </tr>
                  <tr>
                    <th>Pekerjaan Ayah</th>
                    <td><?php echo $p['pekerjaan_ayah'] ?>
                  </tr>
                  <tr>
                    <th>Pekerjaan Ibu</th>
                    <td><?php echo $p['pekerjaan_ibu'] ?>
                  </tr>
                </table>
              </div>
              <div class="form-ppdb col-md-6 kanan">
                <table class="col-md-12">
                  <tr>
                    <th>Keadaan Ayah</th>
                    <td><?php echo $p['keadaan_ayah'] ?>
                  </tr>
                  <tr>
                    <th>Keadaan Ibu</th>
                    <td><?php echo $p['keadaan_ibu'] ?>
                  </tr>
                  <tr>
                    <th>Alamat Orang Tua</th>
                    <td><?php echo $p['alamat_orangtua'] ?>
                  </tr>
                  <tr>
                    <th>No. Telepon</th>
                    <td><?php echo $p['no_telpon_orangtua'] ?>
                  </tr>
                </table>
              </div>
              <a href="cetak.php?id_calon_siswa=<?= $p['id_calon_siswa'] ?>" class="col-md-11 m-5 btn btn-warning">Unduh Formulir</a>
            </form>
          <?php } ?>
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
