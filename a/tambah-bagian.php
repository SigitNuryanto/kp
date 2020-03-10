<?php 

if(isset($_POST['tambah'])) {
	
	$input="INSERT INTO bagian(kd_bagian,nama_bagian,nama,jabatan)
	values ('$_POST[kode]','$_POST[namabag]','$_POST[nama]','$_POST[jabatan]')";

	$hasil= mysqli_query($db,$input);
	if ($hasil) {

		echo "<script>alert('data Berhasil Ditambah..');location.href='index.php?m=bagian'</script>";
	}
	else{
		echo "<script>alert('data Gagal Ditambah..');location.href='index.php?m=tambah-bagian'</script>";
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
			<h1 class="page-header">Tambah bagian</h1>
		</div>
	</div><!--/.row-->
	
	
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">Form Tambah bagian</div>
				<div class="panel-body">
					<div class="col-md-12">
						<form role="form" method="POST">
							<div class="form-group">
								<label>kode bagian</label>
								<input name="kode" class="form-control" placeholder="kode bagian" required="">
							</div>
							<div class="form-group">
								<label>Nama bagian</label>
								<input name="namabag" class="form-control" placeholder="nama bagian" required="">
							</div>
							<div class="form-group">
								<label>Nama</label>
								<input name="nama" class="form-control" placeholder="nama" required="">
							</div>
							<div class="form-group">
								<label>Nama jabatan</label>
								<input name="jabatan" class="form-control" placeholder="jabatan" required="">
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