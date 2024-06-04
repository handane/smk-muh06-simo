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
            <h2>FORMULIR PENDAFTARAN CALON SISWA BARU</h2>
            <br />
            <span>PPDB > </span>
            <span>Formulir Pendaftaran </span>
          </div>
        </div>
      </div>
    </div>

    <div class="">
      <div class="col-xl-12 row">
        <div class="col-xl-2 artikel">
          <?php include('./include/sidebar-ppdb.php') ?>
        </div>
        <div class="col-xl-10">
          <div class="card card-body mt-5">
            <form action="ppdb-post.php" class="row col-md-12" method="post">
              <h5 class="mb-3">Keterangan Pribadi</h5>
              <div class="form-ppdb col-md-6">
                <table class="col-md-12">
                  <tr>
                    <td>Nama</td>
                    <td><input type="text" class="form-control" name="nama"></td>
                  </tr>
                  <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                      <select name="jenis_kelamin" class="form-control" required id="">
                        <option></option>
                        <option value="laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>Tempat Lahir</td>
                    <td><input type="text" class="form-control" name="tempat_lahir"></td>
                  </tr>
                  <tr>
                    <td>Tanggal Lahir</td>
                    <td><input type="date" class="form-control" name="tanggal_lahir"></td>
                  </tr>
                  <tr>
                    <td>Agama</td>
                    <td><input type="text" class="form-control" name="agama"></td>
                  </tr>
                </table>
              </div>
              <div class="form-ppdb col-md-6 kanan">
                <table class="col-md-12">
                  <tr>
                    <td>Alamat Sekarang</td>
                    <td><input type="text" class="form-control" name="alamat"></td>
                  </tr>
                  <tr>
                    <td>No. Telepon</td>
                    <td><input type="number" class="form-control" name="no_telepon"></td>
                  </tr>
                  <tr>
                    <td>No. NIK</td>
                    <td><input type="number" class="form-control" name="nik"></td>
                  </tr>
                  <tr>
                    <td>No. KK</td>
                    <td><input type="number" class="form-control" name="kk"></td>
                  </tr>
                </table>
              </div>
              <h5 class="mt-5 mb-3">Pendidikan</h5>
              <div class="form-ppdb col-md-6">
                <table class="col-md-12">
                  <tr>
                    <td>Sekolah Asal</td>
                    <td><input type="text" class="form-control" name="sekolah_asal"></td>
                  </tr>
                  <tr>
                    <td>Alamat Sekolah</td>
                    <td><input type="text" class="form-control" name="alamat_sekolah"></td>
                  </tr>
                </table>
              </div>
              <div class="form-ppdb col-md-6 kanan">
                <table class="col-md-12">
                  <tr>
                    <td>Nilai Rata-rata SKHUN</td>
                    <td><input type="text" class="form-control" name="skhun"></td>
                  </tr>
                </table>
              </div>
              <h5 class="mt-5 mb-3">Orang Tua</h5>
              <div class="form-ppdb col-md-6">
                <table class="col-md-12">
                  <tr>
                    <td>Nama Ayah</td>
                    <td><input type="text" class="form-control" name="nama_ayah"></td>
                  </tr>
                  <tr>
                    <td>Nama Ibu</td>
                    <td><input type="text" class="form-control" name="nama_ibu"></td>
                  </tr>
                  <tr>
                    <td>Pekerjaan Ayah</td>
                    <td><input type="text" class="form-control" name="pekerjaan_ayah"></td>
                  </tr>
                  <tr>
                    <td>Pekerjaan Ibu</td>
                    <td><input type="text" class="form-control" name="pekerjaan_ibu"></td>
                  </tr>
                </table>
              </div>
              <div class="form-ppdb col-md-6 kanan">
                <table class="col-md-12">
                  <tr>
                    <td>Keadaan Ayah</td>
                    <td>
                      <select name="keadaan_ayah" class="form-control" required id="">
                        <option></option>
                        <option value="Masih Hidup">Masih Hidup</option>
                        <option value="Sudah Meninggal">Sudah Meninggal</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>Keadaan Ibu</td>
                    <td>
                      <select name="keadaan_ibu" class="form-control" required id="">
                        <option></option>
                        <option value="Masih Hidup">Masih Hidup</option>
                        <option value="Sudah Meninggal">Sudah Meninggal</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>Alamat Orang Tua</td>
                    <td><input type="text" class="form-control" name="alamat_orangtua"></td>
                  </tr>
                  <tr>
                    <td>No. Telepon</td>
                    <td><input type="number" class="form-control" name="no_telpon_orangtua"></td>
                  </tr>
                </table>
              </div>
              <input type="submit" class="col-md-11 m-5 btn btn-success" value="Submit" name="submit">
            </form>
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
