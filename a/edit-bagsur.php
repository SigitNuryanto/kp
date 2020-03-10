<?php 

if(isset($_POST['Ubah'])) {
	
	$edit="UPDATE user SET kd_petugas='$_POST[id]',nama_petugas='$_POST[nama_petugas]', username='$_POST[username]',password='$_POST[password]',level='$_POST[level]' WHERE kd_petugas = '$_GET[id]'";

	$hasil= mysqli_query($db,$edit);
	if ($hasil) {

		echo "<script>alert('data Berhasil Diubah..');location.href='index.php?m=bagsur'</script>";
	}
	else{
		echo "<script>alert('Maaf, data Gagal Diubah..');location.href='index.php?m=bagsur'</script>";
	} 

}

$koneksi = "SELECT * from user WHERE kd_petugas= '$_GET[id]'" ;
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
			<h1 class="page-header">Ubah bagian surat</h1>
		</div>
	</div><!--/.row-->
	
	
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">Form Ubah bagian surat</div>
				<div class="panel-body">
					<div class="col-md-12">
						<form role="form" method="POST">
							<div class="form-group">
								<label>kode petugas</label>
								<input name="id" value="<?php echo $data['kd_petugas']; ?>" class="form-control" placeholder="kode petugas" required="">
								</div>
							<div class="form-group">
								<label>nama</label>
								<input name="nama_petugas" value="<?php echo $data['nama_petugas']; ?>" class="form-control" placeholder="nama_petugas" required="">
								</div>
								<div class="form-group">
								<label>username</label>
								<input name="username" value="<?php echo $data['username']; ?>" class="form-control" placeholder="username" required="">
								</div>
								<div class="form-group">
								<label>password</label>
								<input name="password" value="<?php echo $data['password']; ?>" class="form-control" placeholder="password" required="">
								</div>
								<div class="form-group">
								<label>level</label>
								<input name="level" value="<?php echo $data['level']; ?>" class="form-control" placeholder="level" required="">
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