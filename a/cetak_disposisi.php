<?php include '../koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>kwarcab sleman</title>
 
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/datepicker3.css" rel="stylesheet">
    <link href="../css/bootstrap-table.css" rel="stylesheet">
    <link href="../css/styles.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../fa/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../css/datepicker.css">
 
    <!--Icons-->
    <script src="../js/lumino.glyphs.js"></script>
    <style type="text/css">
        .header-image {
            text-align: center;
            margin-bottom: 20px;
        }
        .header-image img {
            width: 100%;
            height: 50%;
        }
    </style>
</head>
<body onload="window.print()">
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-body">
        <div class="header-image text-center">
            <img src="../kwarcab.jpg">
        </div>
          <table class="table table-responsive table-border" style="width: 100%">
            <tbody>
              <?php
              $no=1;
              $db_disposisi  = mysqli_query($db, "SELECT * FROM disposisi WHERE kd_disposisi='" . $_GET['id'] . "'");

              while($data=mysqli_fetch_array($db_disposisi))
              {
                ?>
                <tr>
                  <td style="width: 25%">Kode Disposisi</td>
                  <td>: <?php echo $data['kd_disposisi']; ?></td>
                </tr>
                  
                <tr>
                  <td>Isi Disposisi</td>
                  <td>: <?php echo $data['isi_dispo']; ?></td>
                </tr>
                <tr>
                  <td>Sifat</td>
                  <td>: <?php echo $data['sifat']; ?></td>
                </tr>
                  <?php $db_surat_masuk = mysqli_query($db, "SELECT * FROM surat_masuk WHERE kd_masuk='" . $data['kd_masuk_surat'] . "'");
                  while( $kd_masuk = mysqli_fetch_array( $db_surat_masuk ) ) {
                  ?>
                  <tr>
                    <td>Tanggal Surat</td>
                    <td>: <?php echo $kd_masuk['tgl_surat']; ?></td>
                  </tr>
                  <tr>
                    <td>No Surat</td>
                    <td>: <?php echo $kd_masuk['no_surat']; ?></td>
                  </tr>
                  <?php } ?>
                  <tr>
                    <td>Catatan</td>
                    <td>: <?php echo $data['catatan']; ?></td>
                  </tr>
                  <?php
                  $db_bagian_petugas = mysqli_query( $db, "SELECT * FROM user WHERE kd_petugas='" . $data['kd_petugas_sur'] . "'" );
                  while( $kd_petugas = mysqli_fetch_array( $db_bagian_petugas ) ){
                  ?>
                  <tr>
                      <td>Nama Petugas</td>
                      <td>: <?php echo $kd_petugas['nama_petugas']; ?></td>
                  </tr>
                  <?php } ?>
                </tr>
                <?php
                $no++;
              ?>
            </tbody>
          </table>
          <div style="margin-top: 30px"></div>
          <table class="table table-responsive">
              <tr>
                  <td width="75%" style="height: 120px; border: 1px solid #888;"></td>
                  <td style="border: 1px solid #888">

                  <strong>Diteruskan Kepada :</strong>
                  <br><br><br>
                  <?php 
                  $db_bagian = mysqli_query( $db, "SELECT * FROM bagian WHERE kd_bagian='" . $data['kd_bagian_s'] . "'  " );
                  while( $kd_bagian = mysqli_fetch_array( $db_bagian ) ){
                  ?>
                  <strong><?php echo $kd_bagian['nama_bagian']; ?></strong>
                  <?php } ?>
                  </td>
              </tr>
          </table>
          <?php } ?>
        </div>
      </div>
    </div>
  </div><!--/.row-->  
</div>
</body>