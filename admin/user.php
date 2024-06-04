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
            <li class="breadcrumb-item active">Manajemen User</li>
          </ol>
          <div class="card">
            <div class="card-body">
              <table id="datatablesSimple">
                <thead>
                  <tr style="font-size: 16px;">
                    <th>No</th>
                    <th>Nama</th>
                    <th>username</th>
                    <th>password</th>
                    <th>NIK</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  $get_paket = mysqli_query($conn, "SELECT * FROM user_calon_siswa LEFT JOIN calon_siswa ON user_calon_siswa.id_user_calon_siswa = calon_siswa.id_user_calon_siswa");
                  while ($p = mysqli_fetch_array($get_paket)) {
                  ?>
                    <tr style="font-size: 16px;" id="klik-tabel">
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $p['nama']; ?></td>
                      <td><?php echo $p['username']; ?></td>
                      <td><?php echo $p['password']; ?></td>
                      <td><?php echo $p['nik']; ?></td>
                      <td>
                        <a class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin ingin menghapus data?, semua data user akan terhapus')" href="delete.php?id_user_calon_siswa=<?php echo $p['id_user_calon_siswa'] ?>">delete</a>
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