<?php 

if(isset($_POST['Ubah'])) {
	
	$edit="UPDATE bagian SET kd_bagian='$_POST[id]',nama_bagian='$_POST[namabag]', nama='$_POST[nama]',jabatan='$_POST[jabatan]' WHERE kd_bagian = '$_GET[id]'";

	$hasil= mysqli_query($db,$edit);
	if ($hasil) {

		echo "<script>alert('data Berhasil Diubah..');location.href='index.php?m=bagian'</script>";
	}
	else{
		echo "<script>alert('Maaf, data Gagal Diubah..');location.href='index.php?m=bagian'</script>";
	} 

}

$koneksi = "SELECT * from bagian WHERE kd_bagian= '$_GET[id]'" ;
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
			<h1 class="page-header">Ubah bagian</h1>
		</div>
	</div><!--/.row-->
	
	
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">Form Ubah bagian</div>
				<div class="panel-body">
					<div class="col-md-12">
						<form role="form" method="POST">
							<div class="form-group">
								<label>kode bagian</label>
								<input name="id" value="<?php echo $data['kd_bagian']; ?>" class="form-control" placeholder="kode bagian" required="">
								</div>
							<div class="form-group">
								<label>nama bagian</label>
								<input name="namabag" value="<?php echo $data['nama_bagian']; ?>" class="form-control" placeholder="nama bagian" required="">
								</div>
								<div class="form-group">
								<label>nama </label>
								<input name="nama" value="<?php echo $data['nama']; ?>" class="form-control" placeholder="nama" required="">
								</div>
								<div class="form-group">
								<label>jabatan</label>
								<input name="jabatan" value="<?php echo $data['jabatan']; ?>" class="form-control" placeholder="jabatan" required="">
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