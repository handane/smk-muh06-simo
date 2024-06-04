<?php
require('./database/db.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOGIN</title>
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">

  <style>
    .gradient-custom {
      /* fallback for old browsers */
      background: #6a11cb;

      /* Chrome 10-25, Safari 5.1-6 */
      background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

      /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
    }
  </style>
</head>

<body>
  <section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
              <img src="./assets/images/logosmk4.png" alt="" class="align-center mb-4" width="150px">
              <h3 class="mb-5">SMK MUH 06 SIMO</h3>
              <form action="" method="POST">
                <div class="form-outline mb-4">
                  <input type="text" class="form-control form-control-lg" name="username" placeholder="Email"  />
                </div>

                <div class="form-outline mb-4">
                  <input type="password" class="form-control form-control-lg" name="password" placeholder="password"  />
                </div>

                <div class="login">
                  <button class="btn btn-success form-control btn-block" name="login" type="submit">Masuk</button><br>
                </div>
                <button type="button" class="mb-3 mt-3 btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Buat Akun</button>
                
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h6>Buat Akun</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <form method="POST">
                        <div class="modal-body">
                          <div class="mb-3">
                            <input type="text" class="form-control mt-3" autocomplete="off" name="username_baru" placeholder="Email">
                            <input type="text" class="form-control mt-3" autocomplete="off" name="password_baru" placeholder="Password">
                          </div>
                        </div>
                        <div class="modal-footer">
                          <input type="submit" class="btn btn-primary" name="registrasi" value="Daftar">
                        </div>
                      </form>
                      <?php
                      if (isset($_POST["registrasi"])) {
                        $username_baru = $_POST['username_baru'];
                        $password_baru = $_POST['password_baru'];

                        $get_regist = mysqli_query($conn, "INSERT INTO user_calon_siswa VALUE(
                                      null,
                                      '" . $username_baru . "',
                                      '" . $password_baru . "'
                                  )");
                          if ($get_regist) {
                            echo '<script>alert("data berhasil ditambahkan")</script>';
                            echo '<script>window.location="login.php"</script>';

                          } else {
                            echo '<script>alert("data gagal ditambahkan")</script>';
                          }
                      }
                      ?>
                    </div>
                  </div>
                </div>
              </form>
              <!-- regist -->
              <?php
              if (isset($_POST["login"])) {
                $username = $_POST['username'];
                $password = $_POST['password'];

                if ($username != "" && $password != "") {
                  $get_admin = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");
                  $get_user = mysqli_query($conn, "SELECT * FROM user_calon_siswa WHERE username = '$username' AND password = '$password'");
                  $akun_admin = mysqli_num_rows($get_admin);
                  $akun_user = mysqli_num_rows($get_user);
                  if ($akun_admin == 1) {
                    $admin = $get_admin->fetch_assoc();
                    $_SESSION["admin"] = $admin;
                    echo "<script>location='admin/index.php';</script>";
                  } if ($akun_user == 1) {
                    $user = $get_user->fetch_assoc();
                    $_SESSION["calon_siswa"] = $user;
                    echo "<script>location='ppdb.php';</script>";
                  } else {
              ?>
                    <div class="alert alert-danger alert-dismissible alert-atas"><img src="icons/exclamation-circle-fill.svg" alt="" style="margin-bottom: 3px;"> tidak dapat login, username atau password salah
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                    </div>
              <?php
                  }
                }
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="./assets/js/bootstrap.min.js"></script>
</body>

</html>