<?php
session_start();
include("../database/db.php");
if (!isset($_SESSION["admin"])) {
  echo "<script>location='../index.php'</script>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>KASIR</title>
  <link rel="icon" type="image/png" href="">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/LOGO UNMUL.png" />

  <link href="../css/styles.css" rel="stylesheet" />
  <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
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
  <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">


    <a class="navbar-brand ps-3" href="index.php"> CUTI | ADMIN</a>
    <!-- Navbar Brand-->
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!">
      <i class="fas fa-bars"></i>
    </button>

    <!-- navbar nama -->
    <div class="navbar-nav ps-3 d-md-inline-block form-inline ms-auto" style="color: white; text-decoration: none">
      <p><?php echo "<p>" . $_SESSION['admin']['nama'] . "</p>" ?></p>
    </div>

    <!-- navbar icon  -->
    <ul class="navbar-nav me-0 me-md-3 my-2 my-md-0">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
          
          <li>
            <hr class="dropdown-divider" />
          </li>
          <li><a href="logout.php" class="dropdown-item">logout</a></li>

        </ul>
      </li>
    </ul>
  </nav>
  <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
      <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
        <div class="nav">
                <div class="sb-sidenav-menu-heading">Admin</div>
                  <a class="nav-link" href="index.php">
                     <div class="sb-nav-link-icon">
                        <i class="fas fa-home"></i>
                     </div>
                     Dashboard
                  </a>
                  <a class="nav-link aktif" href="data-paket.php">
                     <div class="sb-nav-link-icon">
                        <i class="fas fa-clipboard-list"></i>
                     </div>
                     Data Paket
                  </a>
                  <a class="nav-link" href="transaksi.php">
                     <div class="sb-nav-link-icon">
                        <i class="fas fa-money-bill-wave"></i>
                     </div>
                     Transaksi
                  </a>
                  <a class="nav-link" href="laporan.php">
                     <div class="sb-nav-link-icon">
                        <i class="fas fa-book-open"></i>
                     </div>
                     Laporan
                  </a>
                  <a class="nav-link" href="manajemen-user.php">
                     <div class="sb-nav-link-icon">
                        <i class="fas fa-user-check"></i>
                     </div>
                     Manajemen User
                  </a>
               </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">masuk sebagai:</div>
            <h6>Admin</h6>
        </div>
      </nav>
    </div>
    <div id="layoutSidenav_content">
      <main>
        <div class="container-fluid px-3">
          <ol class="breadcrumb mb-4 mt-2">
            <li class="breadcrumb-item active">Update Paket</li>
          </ol>
          <div class="card">
            <div class="card-body">
              <?php
              if (isset($_GET['id_paket'])) {
                $id_paket = $_GET['id_paket'];
                $edit = mysqli_query($conn, "SELECT * FROM paket WHERE id_paket = '$id_paket'");
                if (mysqli_num_rows($edit) > 0) {
                  while ($row = mysqli_fetch_array($edit)) {
              ?>

                    <form class="row g-3" method="POST" enctype="multipart/form-data">
                      <div class="col-md-6">
                        <label for="" class="form-label-md"><b>Nama Paket</b></label>
                        <input type="text" class="form-control" name="nama_paket" value="<?php echo $row['nama_paket'] ?>" />
                      </div>
                      <div class="col-md-6">
                        <label for="" class="form-label-md"><b>Deskripsi Paket</b></label>
                        <input type="text" class="form-control" name="deskripsi_paket" value="<?php echo $row['deskripsi_paket'] ?>" />
                      </div>
                      <div class="col-md-6">
                        <label for="" class="form-label-md"><b>Harga</b></label>
                        <input type="text" class="form-control" name="harga" value="<?php echo $row['harga'] ?>" />
                      </div>
                      <div class="col-md-6">
                        <label for="" class="form-label-md"><b>Harga Tambahan/Orang</b></label>
                        <input type="number" class="form-control" name="harga_tambahan" value="<?php echo $row['harga_tambahan'] ?>" />
                      </div>
                      <div class="col-md-12">
                        <input type="submit" class="btn btn-success" name="submit" value="Save" />
                      </div>
                    </form>
              <?php }
                }
              } ?>

              <?php
              if (isset($_POST['submit'])) {
                $nama_paket = $_POST['nama_paket'];
                $deskripsi_paket = $_POST['deskripsi_paket'];
                $harga = $_POST['harga'];
                $harga_tambahan = $_POST['harga_tambahan'];

                $update = mysqli_query($conn, "UPDATE paket SET
                           nama_paket = '$nama_paket',
                           deskripsi_paket = '$deskripsi_paket',
                           harga = '$harga',
                           harga_tambahan = '$harga_tambahan'
                           WHERE id_paket = '$id_paket'");
                if ($update) {
              ?>
              <?php
                  echo
                  '<script>
                  window.location="data-paket.php";
                  alert("data berhasil di update");
                  </script>';
                } else {
                  echo 'gagal ' . mysqli_error($conn);
                }
              }
              ?>

            </div>
          </div>
        </div>
      </main>
      <footer class="mt-5">
      </footer>
    </div>
  </div>
  <script src="../js/scripts.js"></script>
  <script src="../datatables/datatable.js"></script>
  <script src="../js/datatables-simple-demo.js"></script>
  <script src="../bootstrap/js/bootstrap.min.js"></script>
  <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>


</body>

</html>