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
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>PPDB</title>
  <link rel="icon" type="image/png" href="">
  <!-- endinject -->
  <!-- <link rel="shortcut icon" href="./" /> -->

  <link href="./../cetak.css" rel="stylesheet" />
  <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
  <style>
    h6 {
      font-size: 14px;
    }
    h5 {
      font-size: 16px;
    }
    h4 {
      font-size: 18px;
    }
    #ftz16 {
      font-size: 16px;
    }

    .tb-top {
      width: 100%;
      margin: 0 auto;
    }

    .title-top {
      line-height: 1;
      text-align: center;
    }

    .title-top .logo {
      text-align: left;
    }

    .text-justify {
      text-align: justify;
      padding-right: 30px;
    }
    .title-top, .title-top th, .title-top td, .title-top h4, .title-top h5, .title-top h6{
      line-height: 40%;
    }
    .title-top h4,
    h3,
    h6 {
      line-height: 0.8;
    }

    .title-top h6 {
      font-size: 13px;
    }

    .title-top td {
      padding-bottom: 5px;
    }

    .title-top .a-1 {
      margin-right: 10px;
    }

    .title-top .a-2 {
      margin-left: 10px;
    }

    .tb-top {
      border-bottom: 3px solid #000;
    }

    .title-top {
      font-size: 12px;
      font-weight: normal;
    }

    .fill-1 {
      text-align: left;
      margin-left: 30px;
    }

    .fill-1 td {
      padding-right: 20px;
    }

    .ttd {
      float: right;
    }
    /* .table-1 {
      border: 1px solid black;
    } */
    .table-1 th, .table-1 td {
      border: 1px solid black;
    }
    .table-1 th {
      text-align: center;
    }
    table tr,table th, table td  {
      line-height: 120%;
    }
    table, p, span {
      font-size: 12px;
    }

    body {
      background-color: #fff;
    }
  </style>
</head>

<body class="sb-nav-fixed">
  <?php
  $id_calon_siswa = $_GET['id_calon_siswa'];
  $ping = mysqli_query($conn, "SELECT * FROM calon_siswa WHERE id_calon_siswa = '$id_calon_siswa'");
  $pk = mysqli_fetch_array($ping);
  // $waktu_awal = date_create($pk['tgl_cuti']);
  // $waktu_akhir = date_create($pk['tgl_berakhir']);
  // $diff = date_diff($waktu_awal, $waktu_akhir);
  // $diff_d = $diff->d ;
  ?>
  <main>
    <table class="tb-top">
      <thead>
        <tr class="title-top">
          <th class="logo"><img src="./../assets/images/logosmk4.png" alt="" width="100px"></th>
          <td>
            <h5>MAJELIS PENDIDIKAN DASAR DAN MENENGAH MUHAMMADIYAH</h5>
            <h4>SMK MUHAMMADIYAH 6 SIMO BOYOLALI</h4>
            <h5>SK. DIKNAS. NO: 425.1/3026/20</h5>
            <h6>Jl. Madu, Ngreni, Simo, Boyolali, Pos. 57377, Telp. 0276 3295069</h6>
            Email:<a class="a-1" href="#"> smkmuhsimo@gmail.com</a>
            Web:<a class="a-2" href="#">http://smksmuh6simo.sch.id</a>
          </td>
        </tr>
      </thead>
    </table>
    <div class="text-center mt-1 mb-1">
      <h5>FORMULIR PENDAFTARAN CALON SISWA BARU<br>TAHUN PELAJARAN 2023/2024</h5>
    </div>
    <div class="text-justify">
      <div class="ms-5 me-3">
        <h6 style="text-indent: 10px;">A. KETERANGAN PRIBADI</h6>
        <table class="fill-1">
          <tr>
            <td>1. Nama</td>
            <td>:</td>
            <td><?php echo $pk['nama'] ?></td>
          </tr>
          <tr>
            <td>2. Jenis Kelamin</td>
            <td>:</td>
            <td><?php echo $pk['jenis_kelamin'] ?></td>
          </tr>
          <tr>
            <td>3. Tempat/Tanggal Lahir</td>
            <td>:</td>
            <td><?php echo $pk['tempat_lahir'] ?>, <?php echo $pk['tanggal_lahir'] ?></td>
          </tr>
          <tr>
            <td>4. Agama</td>
            <td>:</td>
            <td><?php echo $pk['agama'] ?></td>
          </tr>
          <tr>
            <td>5. Alamat Sekarang</td>
            <td>:</td>
            <td><?php echo $pk['alamat_sekarang'] ?></td>
          </tr>
          <tr>
            <td>6. No. Telepon/HP</td>
            <td>:</td>
            <td><?php echo $pk['no_telepon'] ?></td>
          </tr>
          <tr>
            <td>7. NISN</td>
            <td>:</td>
            <td><?php echo $pk['nik'] ?></td>
          </tr>
          <tr>
            <td>8. No. KK</td>
            <td>:</td>
            <td><?php echo $pk['kk'] ?></td>
          </tr>
        </table>
      </div>

      <div class="ms-5 mt-3 me-3">
        <h6 style="text-indent: 10px;">B. PENDIDIKAN</h6>
        <table class="fill-1">
          <tr>
            <td>1. Sekolah Asal</td>
            <td>:</td>
            <td><?php echo $pk['sekolah_asal'] ?></td>
          </tr>
          <tr>
            <td>2. Alamat Sekolah</td>
            <td>:</td>
            <td><?php echo $pk['alamat_sekolah'] ?></td>
          </tr>
          <tr>
            <td>3. Nilai Rata-Rata SKHUN</td>
            <td>:</td>
            <td><?php echo $pk['skhun'] ?></td>
          </tr>
        </table>
      </div>

      <div class="ms-5 mt-3 me-3">
        <h6 style="text-indent: 10px;">C. ORANG TUA</h6>
        <table class="fill-1">
          <tr>
            <th>1. Nama Orang Tua</th>
            <td>:</td>
            <th>a. Ayah</th>
            <td>:</td>
            <td><?php echo $pk['nama_ayah'] ?></td>
          </tr>
          <tr>
            <th></th>
            <td></td>
            <th>b. Ibu</th>
            <td>:</td>
            <td><?php echo $pk['nama_ibu'] ?></td>
          </tr>
          <tr>
            <th>2. Pekerjaan Orang Tua</th>
            <td>:</td>
            <th>a. Ayah</th>
            <td>:</td>
            <td><?php echo $pk['pekerjaan_ayah'] ?></td>
          </tr>
          <tr>
            <th></th>
            <td></td>
            <th>b. Ibu</th>
            <td>:</td>
            <td><?php echo $pk['pekerjaan_ibu'] ?></td>
          </tr>
          <tr>
            <th>3. Keadaan Orang Tua</th>
            <td>:</td>
            <th>a. Ayah</th>
            <td>:</td>
            <td><?php echo $pk['keadaan_ayah'] ?></td>
          </tr>
          <tr>
            <th></th>
            <td></td>
            <th>b. Ibu</th>
            <td>:</td>
            <td><?php echo $pk['keadaan_ibu'] ?></td>
          </tr>
          <tr>
            <td>4. Alamat Orangtua</td>
            <td>:</td>
            <td><?php echo $pk['alamat_orangtua'] ?></td>
          </tr>
          <tr>
            <td>5. No.Telepon/HP</td>
            <td>:</td>
            <td><?php echo $pk['no_telpon_orangtua'] ?></td>
          </tr>
        </table>
      </div>

      <div class="ms-5 mt-3 me-3">
      <h6 style="text-indent: 10px;">D. SYARAT-SYARAT DAN YANG DILAMPIRKAN</h6>
        <table class="table-1 fill-1">
          <tr>
            <td colspan="5" class="ps-3"><b>1. Persyaratan Tetap</b></td>
          </tr>
          <tr>
            <th style="width: 50px;">No</th>
            <th style="width: 340px;">Syarat-syarat</th>
            <th style="width: 130px;">Banyak</th>
            <th style="width: 120px;">Ada</th>
            <th style="width: 120px;">Tidak Ada</th>
          </tr>
          <tr>
            <th>1</th>
            <td>Foto Copy Ijazah yang dilegalisir</td>
            <th>1 Lembar</th>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th>2</th>
            <td>Pas Foto ukuran 3x4 hitam putih</td>
            <th>2 Lembar</th>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th>3</th>
            <td>Foto Copy KK</td>
            <th>1 Lembar</th>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th>4</th>
            <td>Foto Copy KIP, KIS, KPS (Jika Punya)</td>
            <th>1 Lembar</th>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td colspan="5"  class="ps-3"><b>2. Fisik</b></td>
          </tr>
          <tr>
            <th>No</th>
            <td>Keadaan Fisik</td>
            <th colspan="2">Data Fisik</th>
            <th>Keterangan</th>
          </tr>
          <tr>
            <th>1</th>
            <td>Tato</td>
            <th>Ya</th>
            <th>Tidak</th>
            <td></td>
          </tr>
          <tr>
            <th>2</th>
            <td>Tindik</td>
            <th>Ya</th>
            <th>Tidak</th>
            <td></td>
          </tr>
          <tr>
            <th>3</th>
            <td>Tinggi Badan</td>
            <th colspan="2"></th>
            <td></td>
          </tr>
          <tr>
            <th>4</th>
            <td>Berat Badan</td>
            <th colspan="2"></th>
            <td></td>
          </tr>
        </table>
      </div>

      <div class="ms-5 mt-3 me-3">
      <h6 style="text-indent: 10px;">E. PROGRAM KEAHLIAN ATAU JURUSAN YANG DIPILIH</h6>
      <table class="fill-1">
          <tr>
            <th style="width: 120px;">Pilihan 1*</th>
            <td><img src="./assets/images/kotak.jpg" height="20px" alt=""></td>
            <th style="width: 200px;">1. Teknik Pemesinan</th>
            <th style="width: 50px;"></th>
            <th style="width: 120px;">Pilihan 2*</th>
            <td><img src="./assets/images/kotak.jpg" height="20px" alt=""></td>
            <th style="width: 200px;">1. Teknik Pemesinan</th>
          </tr>
          <tr>
            <th></th>
            <td><img src="./assets/images/kotak.jpg" height="20px" alt=""></td>
            <th>2. Komputer Multimedia</th>
            <th style="width: 50px;"></th>
            <th style="width: 120px;"></th>
            <td><img src="./assets/images/kotak.jpg" height="20px" alt=""></td>
            <th>2. Komputer Multimedia</th>
          </tr>
          <tr>
            <th></th>
            <td><img src="./assets/images/kotak.jpg" height="20px" alt=""></td>
            <th>3. Busana Butik</th>
            <th style="width: 50px;"></th>
            <th style="width: 120px;"></th>
            <td><img src="./assets/images/kotak.jpg" height="20px" alt=""></td>
            <th>3. Busana Butik</th>
          </tr>
        </table>
      </div>

      <?php 
        $datem = date('d M Y');
        $date = date('d');
        $month = date('M');
        $year = date('Y');
        // $kadis = mysqli_query($conn, "SELECT * FROM kepala_dinas");
        // $pkadis = mysqli_fetch_array($kadis);
      ?>
      <div class="mt-1 ms-5 ttd">
        <span>Boyolali, <?php echo $datem ?> <br>
        Calon Siswa,</span> <br><br><br>
        <h6><?php echo $pk['nama'] ?></h6>
      </div>
    </div>
  </main>
  <script src="../js/scripts.js"></script>
  <script src="../datatables/datatable.js"></script>
  <script src="../js/datatables-simple-demo.js"></script>
  <script src="../bootstrap/js/bootstrap.min.js"></script>
  <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>


</body>

</html>