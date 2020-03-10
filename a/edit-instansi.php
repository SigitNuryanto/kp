<?php 

if(isset($_POST['Ubah'])) {
	
	$edit="UPDATE instansi SET kd_instansi='$_POST[id]',nama_instansi='$_POST[nama_instansi]', alamat='$_POST[alamat]' WHERE kd_instansi = '$_GET[id]'";

	$hasil= mysqli_query($db,$edit);
	if ($hasil) {

		echo "<script>alert('data Berhasil Diubah..');location.href='index.php?m=instansi'</script>";
	}
	else{
		echo "<script>alert('Maaf, data Gagal Diubah..');location.href='index.php?m=instansi'</script>";
	} 

}

$koneksi = "SELECT * from instansi WHERE kd_instansi= '$_GET[id]'" ;
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
			<h1 class="page-header">Ubah instansi</h1>
		</div>
	</div><!--/.row-->
	
	
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">Form Ubah Berita</div>
				<div class="panel-body">
					<div class="col-md-12">
						<form role="form" method="POST">
							<div class="form-group">
								<label>kode instansi</label>
								<input name="id" value="<?php echo $data['kd_instansi']; ?>" class="form-control" placeholder="kode instansi" required="">
								</div>
							<div class="form-group">
								<label>nama instansi</label>
								<input name="nama_instansi" value="<?php echo $data['nama_instansi']; ?>" class="form-control" placeholder="nama instansi" required="">
								</div>
								<div class="form-group">
									<label>alamat</label>
									<textarea name="alamat" required="" placeholder="alamat instnasi" class="form-control" rows="3"><?php echo $data['alamat']; ?></textarea>
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