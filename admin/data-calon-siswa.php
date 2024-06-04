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
          <!-- <button type="button" class="mb-3 btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Tambah</button>
          
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h6>Tambah Paket</h6>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST">
                  <div class="modal-body">
                    <div class="mb-3">
                      <input type="text" class="form-control mt-3" id="recipient-name" autocomplete="off" name="nama_paket" placeholder="Nama Paket">
                      <input type="text" class="form-control mt-3" id="recipient-name" autocomplete="off" name="deskripsi_paket" placeholder="Deskripsi Paket">
                      <input type="text" class="form-control mt-3" id="recipient-name" autocomplete="off" name="harga" placeholder="Harga">
                      <input type="text" class="form-control mt-3" id="recipient-name" autocomplete="off" name="harga_tambahan" placeholder="Harga Tambahan">
                    </div>
                  </div>
                  <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" name="regist" value="Daftar">
                  </div>
                </form>
                <?php
                if (isset($_POST["regist"])) {
                  $nama_paket = $_POST['nama_paket'];
                  $deskripsi_paket = $_POST['deskripsi_paket'];
                  $harga = $_POST['harga'];
                  $harga_tambahan = $_POST['harga_tambahan'];

                  $get_regist = mysqli_query($conn, "INSERT INTO paket VALUE(
                                null,
                                '" . $nama_paket . "',
                                '" . $deskripsi_paket . "',
                                '" . $harga . "',
                                '" . $harga_tambahan . "'
                            )");
                    if ($get_regist) {
                      echo '<script>alert("data berhasil ditambahkan")</script>';
                    } else {
                      echo '<script>alert("data gagal ditambahkan")</script>';
                    }
                }
                ?>
              </div>
            </div>
          </div> -->
          <div class="card">
            <div class="card-body">
              <table id="datatablesSimple">
                <thead>
                  <tr style="font-size: 16px;">
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>Asal Sekolah</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  $get_paket = mysqli_query($conn, "SELECT * FROM calon_siswa");
                  while ($p = mysqli_fetch_array($get_paket)) {
                  ?>
                    <tr style="font-size: 16px;" id="klik-tabel">
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $p['nama']; ?></td>
                      <td><?php echo $p['nik']; ?></td>
                      <td><?php echo $p['sekolah_asal']; ?></td>
                      <td>
                        <a class="btn btn-sm btn-primary" href="detail-siswa.php?id_calon_siswa=<?php echo $p['id_calon_siswa'] ?>">Detail</a>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
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