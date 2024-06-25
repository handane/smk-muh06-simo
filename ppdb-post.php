<?php
                    session_start();
                    require("./database/db.php");
                    if (!isset($_SESSION["calon_siswa"])) {
                       echo "<script>location='login.php'</script>";
                    }
                    if (isset($_POST["submit"])) {
                      $nama = $_POST['nama'];
                      $jenis_kelamin = $_POST['jenis_kelamin'];
                      $tempat_lahir = $_POST['tempat_lahir'];
                      $tanggal_lahir = $_POST['tanggal_lahir'];
                      $agama = $_POST['agama'];
                      $alamat = $_POST['alamat'];
                      $no_telepon = $_POST['no_telepon'];
                      $nik = $_POST['nik'];
                      $kk = $_POST['kk'];
                      $sekolah_asal = $_POST['sekolah_asal'];
                      $alamat_sekolah = $_POST['alamat_sekolah'];
                      $skhun = $_POST['skhun'];
                      $jurusan = $_POST['jurusan'];
                      $nama_ayah = $_POST['nama_ayah'];
                      $nama_ibu = $_POST['nama_ibu'];
                      $pekerjaan_ayah = $_POST['pekerjaan_ayah'];
                      $pekerjaan_ibu = $_POST['pekerjaan_ibu'];
                      $keadaan_ayah = $_POST['keadaan_ayah'];
                      $keadaan_ibu = $_POST['keadaan_ibu'];
                      $alamat_orangtua = $_POST['alamat_orangtua'];
                      $no_telpon_orangtua = $_POST['no_telpon_orangtua'];
                      $id_user_calon_siswa = $_SESSION["calon_siswa"]['id_user_calon_siswa'];
                      $cek_regist = mysqli_query($conn, "SELECT * FROM calon_siswa WHERE id_user_calon_siswa = '$id_user_calon_siswa'");
                      if (mysqli_num_rows($cek_regist) < 1) {
                        $get_regist = mysqli_query($conn, "INSERT INTO calon_siswa VALUE(
                                null,
                                '" . $id_user_calon_siswa . "',
                                '" . $nama . "',
                                '" . $jenis_kelamin . "',
                                '" . $tempat_lahir . "',
                                '" . $tanggal_lahir . "',
                                '" . $agama . "',
                                '" . $alamat . "',
                                '" . $no_telepon . "',
                                '" . $nik . "',
                                '" . $kk . "',
                                '" . $sekolah_asal . "',
                                '" . $alamat_sekolah . "',
                                '" . $skhun . "',
                                '" . $jurusan . "',
                                '" . $nama_ayah . "',
                                '" . $nama_ibu . "',
                                '" . $pekerjaan_ayah . "',
                                '" . $pekerjaan_ibu . "',
                                '" . $keadaan_ayah . "',
                                '" . $keadaan_ibu . "',
                                '" . $alamat_orangtua . "',
                                '" . $no_telpon_orangtua . "'
                            )");
                        if ($get_regist) {
                          echo '<script>alert("formulir berhasil terkirim")</script>';
                          echo '<script>window.location="data-ppdb.php"</script>';
                        } else {
                          echo '<script>alert("formulir gagal terkirim")</script>';
                          echo '<script>window.location="data-ppdb.php"</script>';
                        }
                      } else {
                        echo '<script>alert("Gagal, formulir hanya dapat didaftarkan sekali")</script>';
                        echo '<script>window.location="data-ppdb.php"</script>';
                      }
                    }
                    ?>
