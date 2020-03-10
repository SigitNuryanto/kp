<?php 

if(isset($_POST['tambah'])) {
	
	$input="INSERT INTO user(kd_petugas,nama_petugas,username, password, level)
	values ('$_POST[kode]','$_POST[nama]','$_POST[username]','$_POST[password]','$_POST[level]')";

	$hasil= mysqli_query($db,$input);
	if ($hasil) {

		echo "<script>alert('data Berhasil Ditambah..');location.href='index.php?m=bagsur'</script>";
	}
	else{
		echo "<script>alert('data Gagal Ditambah..');location.href='index.php?m=tambah-bagsur'</script>";
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
			<h1 class="page-header">Tambah user</h1>
		</div>
	</div><!--/.row-->
	
	
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">Form Tambah pengguna</div>
				<div class="panel-body">
					<div class="col-md-12">
						<form role="form" method="POST">
							<div class="form-group">
								<label>kode petugas</label>
								<input name="kode" class="form-control" placeholder="kode petugas" required="">
							</div>
							<div class="form-group">
								<label>Nama petugas</label>
								<input name="nama" class="form-control" placeholder="nama petugas" required="">
							</div>
							<div class="form-group">
								<label>username</label>
								<input name="username" class="form-control" placeholder="username" required="">
							</div>
							<div class="form-group">
								<label>password</label>
								<input name="password" class="form-control" placeholder="password" required="">
							</div>
							<div class="form-group">
								<label>level</label>
								<input name="level" class="form-control" placeholder="level" required="">
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