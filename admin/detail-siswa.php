<?php
session_start();
include("../database/db.php");
if (!isset($_SESSION["admin"])) {
  echo "<script>location='../login.php'</script>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('./include/meta.php') ?>
  
  <style>
    #ftz16 {
      font-size: 16px;
    }

    body {
      background-color: #f1f1f1;
    }
    .kanan {
        padding-left: 10px;
      }
      th {
        width: 50%;
      }
  </style>
</head>

<body class="sb-nav-fixed">
  <?php include('./include/nav.php') ?>
  
  <div id="layoutSidenav">
    <?php include('./include/sidenav.php') ?>
    
    <div id="layoutSidenav_content">
      <main>
        <div class="container-fluid px-3">
          <ol class="breadcrumb mb-4 mt-2">
            <li class="breadcrumb-item active">Data Calon Siswa</li>
          </ol>
            <?php 
                $id_user = $_GET['id_calon_siswa'];
                $get_paket = mysqli_query($conn, "SELECT * FROM calon_siswa WHERE id_calon_siswa = $id_user");
                $p = mysqli_fetch_array($get_paket);
                $row = mysqli_num_rows($get_paket);
              ?>
        <div class="">
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
              <div class="form-ppdb col-md-6">
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
                    <th>No. NIK</th>
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
              <div class="form-ppdb col-md-6">
                <table class="col-md-12">
                  <tr>
                    <th>Nilai Rata-rata SKHUN</th>
                    <td><?php echo $p['skhun'] ?>
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
              <a href="cetak-formulir.php" class="col-md-11 m-5 btn btn-warning">Unduh Formulir</a>
            </form>''
          <?php } ?>
          </div>
        </div>
      </main>
      <footer class="mt-5">
      </footer>
    </div>
  </div>
  <script src="./js/scripts.js"></script>
  <script src="./datatables/datatable.js"></script>
  <script src="./js/datatables-simple-demo.js"></script>
  <script src="./bootstrap/js/bootstrap.min.js"></script>
  <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>


</body>

</html>