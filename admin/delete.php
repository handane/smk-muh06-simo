<?php
session_start();
include("../database/db.php");
if (!isset($_SESSION["admin"])) {
  echo "<script>location='../index.php'</script>";
}

if (isset($_GET['id_user_calon_siswa'])) {
   $id_user_calon_siswa = $_GET['id_user_calon_siswa'];
   $delete_data_siswa = mysqli_query($conn, "DELETE FROM calon_siswa WHERE id_user_calon_siswa = '$id_user_calon_siswa'");
   $delete_user = mysqli_query($conn, "DELETE FROM user_calon_siswa WHERE id_user_calon_siswa = '$id_user_calon_siswa'");
   if($delete_user){
      echo "<script>window.location='user.php'</script>";
   }
}
?>
