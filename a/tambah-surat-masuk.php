<?php
 
if(isset($_POST['tambah'])) {
 

  function ubah_format_tanggal( $str ) {
    $tgl = explode('/', $str);
    return $tgl[2] . '-' . $tgl[0] . '-' . $tgl[1];
  }
 
 
  // Masukkan informasi file ke database
  $kd_masuk               =$_POST['kd_masuk'];
  $kd_petugas_surat       = $_POST['kd_petugas_surat'];
  $kd_instansi_surat      = $_POST['kd_instansi_surat'];
  $no_surat               = $_POST['no_surat'];
  $tgl_surat              = ubah_format_tanggal( $_POST['tgl_surat'] );
  $tgl_masuk              = ubah_format_tanggal( $_POST['tgl_masuk'] );
  $keterangan             = $_POST['keterangan'];
  $file_nama = $_FILES['file_nama']['name'];
  $tmp = $_FILES['file_nama']['tmp_name'];
  $path = "a/file/".$file_nama;
  move_uploaded_file($_FILES['file_nama']['tmp_name'],'a/file/'.$file_nama);

 $insert="INSERT INTO surat_masuk (kd_masuk,kd_petugas_surat,kd_instansi_surat,no_surat,tgl_surat,tgl_masuk,keterangan,file_nama) 
  VALUES('$kd_masuk','$kd_petugas_surat','$kd_instansi_surat','$no_surat','$tgl_surat','$tgl_masuk','$keterangan','$file_nama')";
  $hasil=mysqli_query($db,$insert);
  if ($hasil) {
    echo "<script>alert('File Berhasil Ditambah..');location.href='index.php?m=surat-masuk'</script>";
  }
  else{
    echo "<script>alert('File Gagal Ditambah..');location.href='index.php?m=tambah-surat-masuk'</script>";
  }
 
}
?>
 
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">    
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
      <li class="active">Icons</li>
    </ol>
  </div><!--/.row-->
 
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Tambah surat masuk</h1>
    </div>
  </div><!--/.row-->
 
 
  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading">Form Tambah surat masuk</div>
        <div class="panel-body">
          <div class="col-md-12">
            <form enctype="multipart/form-data" role="form" method="POST">
             <div class="form-group">
                <label>Pilih File</label>
                <input type="file" class="form-control" name="file_nama" >
              </div>
              <div class="form-group">
                <label>kode surat masuk</label>
                <input name="kd_masuk" class="form-control" placeholder=" kode surat" required="">
              </div>
            <div class="form-group">
              <label>nama petugas</label>
              <div class="input-group">
                  
                    <div class="input-group-addon">
                      <i class="fa fa-user"></i>
                    </div>
                    <select name="kd_petugas_surat" class="form-control">
                    <?php
                      
                      $querysurat = mysqli_query($db, "SELECT * FROM user");
                      if(mysqli_num_rows($querysurat) == 0){
                   echo "<option>No Data Here</option>";
                }else{
                 while($row = mysqli_fetch_assoc($querysurat)){
                          if( $row['nama_petugas'] != 'kepala' ){
                             echo "<option value=".$row['kd_petugas'].">".$row['nama_petugas']."</option>";
                        }
                 }
                 }
                    ?>
                    </select>
                </div>
            </div>
               <div class="form-group">
               <label>nama instansi</label>
                <div class="input-group">
                  
                    <div class="input-group-addon">
                      <i class="fa fa-user"></i>
                    </div>
                    <select name="kd_instansi_surat" class="form-control">
                    <?php
                      
                      $queryinstansi = mysqli_query($db, "SELECT * FROM instansi");
                      if(mysqli_num_rows($queryinstansi) == 0){
                   echo "<option>No Data Here</option>";
                }else{
                 while($row = mysqli_fetch_assoc($queryinstansi)){
                  echo "<option value=".$row['kd_instansi'].">".$row['nama_instansi']."</option>";
                 }
                 }
                    ?>
                    </select>
                </div>
                </div>
                <div class="form-group">
                <label>nomor surat</label>
                <input name="no_surat" class="form-control" placeholder="nomor surat" required="">
              </div>
              <div class="form-group">
                <label>Tanggal surat </label>
                  <div class="input-group date">
                    <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                    </div>
                    <!-- format tanggal : yyyy-mm-dd -->
                    <input  name="tgl_surat" id="calendar"  type="text" class="form-control" placeholder="">
                  </div>
              </div>
                <div class="form-group">
                <label>Tanggal masuk </label>
                  <div class="input-group date">
                    <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                    </div>

                    <input id="kalender" name="tgl_masuk" type="text" class="form-control" placeholder=" ">
                  </div>
              </div>
              <div class="form-group">
                <label>keterangan</label>
                <textarea name="keterangan" required="" placeholder="keterangan" class="form-control" rows="3"></textarea>
              </div>
            </div>
            <div class="col-md-6">
              <button type="submit" name="tambah" class="btn btn-primary">Simpan</button>
              <button type="reset" class="btn btn-default">Reset</button>
            </div>
          </form>
        </div>
      </div>
    </div><!-- /.col-->
  </div><!-- /.row -->
 
</div><!--/.main-->
