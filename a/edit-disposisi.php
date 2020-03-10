<?php 

if(isset($_POST['Ubah'])) {
	
	$edit="UPDATE disposisi SET kd_disposisi='$_POST[kd_disposisi]', kd_bagian_s='$_POST[kd_bagian_s]', isi_dispo='$_POST[isi_dispo]',sifat='$_POST[sifat]', catatan='$_POST[catatan]', kd_masuk_surat='$_POST[kd_masuk_surat]', kd_petugas_sur='$_POST[kd_petugas_sur]' WHERE kd_disposisi = '$_GET[kd_disposisi]'";

	$hasil= mysqli_query($db,$edit);
	if ($hasil) {

		echo "<script>alert('data Berhasil Diubah..');location.href='index.php?m=disposisi-kep'</script>";
	}
	else{
		echo "<script>alert('Maaf, data Gagal Diubah..');location.href='index.php?m=edit-disposisi'</script>";
	} 

}

$koneksi = "SELECT * from disposisi WHERE kd_disposisi='$_GET[kd_disposisi]'" ;
$query  = mysqli_query($db,$koneksi);
$data=mysqli_fetch_array($query);

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
			<h1 class="page-header">Ubah disposisi</h1>
		</div>
	</div><!--/.row-->
	
	
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">Form Ubah disposisi</div>
				<div class="panel-body">
					<div class="col-md-12">
						<form role="form" method="POST" action="index.php?m=edit-disposisi&kd_disposisi=<?php echo $_GET['kd_disposisi']; ?>">
							<div class="form-group">
								<label>kode disposisi</label>
								<input name="kd_disposisi" value="<?php echo $data['kd_disposisi']; ?>" class="form-control" placeholder="kode disposisi" required="">
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
               					<label>kode surat </label>
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
								<label>nsifat </label>
								<input name="sifat" value="<?php echo $data['sifat']; ?>" class="form-control" placeholder="nama" required="">
								</div>
								<div class="form-group">
								<label>catatan</label>
								<input name="catatan" value="<?php echo $data['catatan']; ?>" class="form-control" placeholder="catatan" required="">
                <div class="form-group">
                <label>Isi Disposisi</label>
                <input name="isi_dispo" value="<?php echo $data['isi_dispo']; ?>" class="form-control" placeholder="Isi Disposisi" required="">
								</div>
							</div>
							<div class="col-md-6">
								<button type="submit" name="Ubah" class="btn btn-primary">Simpan</button>
								<button type="reset" class="btn btn-default">Reset</button>
							</div>
						</form>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->

	</div><!--/.main-->