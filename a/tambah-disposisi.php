<?php
 
if(isset($_POST['tambah'])) {
 
 
  // Masukkan informasi file ke database
  $kd_dispo               = $_POST['kd_disposisi'];
  $kd_petugas_surat       = $_POST['kd_petugas_sur'];
  $kd_masuk               = $_POST['kd_masuk_surat'];
  $catatan                = $_POST['catatan'];
  $kd_bagian_s            = $_POST['kd_bagian_s'];
  $sifat                  = $_POST['sifat'];
  $isi_dispo                  = $_POST['isi_dispo'];


 $insert="INSERT INTO disposisi (kd_disposisi, kd_petugas_sur,kd_masuk_surat,kd_bagian_s,catatan,sifat, isi_dispo ) 
  VALUES('$kd_dispo','$kd_petugas_surat','$kd_masuk','$kd_bagian_s','$catatan','$sifat','$isi_dispo')";
  $hasil=mysqli_query($db,$insert);
  if ($hasil) {
    echo "<script>alert('File Berhasil Ditambah..');location.href='index.php?m=disposisi-kep'</script>";
  }
  else{
    echo "<script>alert('File Gagal Ditambah..');location.href='index.php?m=tambah-disposisi'</script>";
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
                <label>kode disposisi</label>
                <input name="kd_disposisi" class="form-control" placeholder=" kode disposisi" required="">
              </div>
            <div class="form-group">
              <label>kode petugas</label>
              <div class="input-group">
                  
                    <div class="input-group-addon">
                      <i class="fa fa-user"></i>
                    </div>
                    <select name="kd_petugas_sur" class="form-control">
                    <?php
                      
                      $querypetugas = mysqli_query($db, "SELECT * FROM user");
                      if(mysqli_num_rows($querypetugas) == 0){
                   echo "<option>No Data Here</option>";
                }else{
                 while($row = mysqli_fetch_assoc($querypetugas)){
                  echo "<option value=".$row['kd_petugas'].">".$row['nama_petugas']."</option>";
                 }
                 }
                    ?>
                    </select>
                </div>
            </div>
               <div class="form-group">
               <label>kode surat masuk</label>
                <div class="input-group">
                  
                    <div class="input-group-addon">
                      <i class="fa fa-user"></i>
                    </div>
                    <select name="kd_masuk_surat" class="form-control">
                    <?php
                      
                      $querysurat = mysqli_query($db, "SELECT * FROM surat_masuk");
                      if(mysqli_num_rows($querysurat) == 0){
                   echo "<option>No Data Here</option>";
                }else{
                 while($row = mysqli_fetch_assoc($querysurat)){
                  echo "<option value=".$row['kd_masuk'].">".$row['kd_masuk']."</option>";
                 }
                 }
                    ?>
                    </select>
                </div>
                </div>
                 <div class="form-group">
               <label>kode bagian</label>
                <div class="input-group">
                  
                    <div class="input-group-addon">
                      <i class="fa fa-user"></i>
                    </div>
                    <select name="kd_bagian_s" class="form-control">
                    <?php
                      
                      $querybagian = mysqli_query($db, "SELECT * FROM bagian");
                      if(mysqli_num_rows($querybagian) == 0){
                   echo "<option>No Data Here</option>";
                }else{
                 while($row = mysqli_fetch_assoc($querybagian)){
                  echo "<option value=".$row['kd_bagian'].">".$row['nama_bagian']."</option>";
                 }
                 }
                    ?>
                    </select>
                </div>
                </div>
                <div class="form-group">
                <label>sifat</label>
                <input name="sifat" class="form-control" placeholder="sifat surat" required="">
              </div> </div>
                <div class="form-group">
                <label>isi disposisi</label>
                <textarea name="isi_dispo" required="" placeholder="isi" class="form-control" rows="3"></textarea>
              </div>
             
              <div class="form-group">
                <label>catatan</label>
                <textarea name="catatan" required="" placeholder="catatan" class="form-control" rows="3"></textarea>
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
