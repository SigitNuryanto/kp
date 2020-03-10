<?php 

if(isset($_POST['Ubah'])) {

	function ubah_format_tanggal( $str ) {
     $tgl = explode('/', $str);
    return $tgl[2] . '-' . $tgl[0] . '-' . $tgl[1];
   }
	$edit="UPDATE surat_keluar SET kd_keluar='$_POST[id]',kd_petugas_surat='$_POST[kd_petugas_surat]', kd_instansi_surat='$_POST[kd_instansi_surat]',no_surat='$_POST[no_surat]',isi_surat='$_POST[isi_surat]',tanggal='". ubah_format_tanggal( $_POST['tanggal']) . "' WHERE kd_keluar = '$_GET[id]'";

	$hasil= mysqli_query($db,$edit);
	if ($hasil) {

		echo "<script>alert('data Berhasil Diubah..');location.href='index.php?m=surat-keluar'</script>";
	}
	else{
		echo "<script>alert('Maaf, data Gagal Diubah..');location.href='index.php?m=edit-surke'</script>";
	} 

}

$koneksi = "SELECT * from surat_keluar WHERE kd_keluar = '$_GET[id]'" ;
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
			<h1 class="page-header">Ubah surat masuk</h1>
		</div>
	</div><!--/.row-->
	
	
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">Form Ubah surat masuk</div>
				<div class="panel-body">
					<div class="col-md-12">
						<form role="form" method="POST">
							<div class="form-group">
								<label>kode keluar</label>
								<input name="id" value="<?php echo $data['kd_keluar']; ?>" class="form-control" placeholder="kode surat keluar" required="">
								</div>
							 <div class="form-group">
              					<label>kode petugas</label>
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
                 					if( $row['nama_petugas'] != 'bambang s' ){
                  						echo "<option value=".$row['kd_petugas'].">".$row['nama_petugas']."</option>";
                 					}
                 				}
                 				}
                    			?>
                    			</select>
                				</div>
            				</div>
							<div class="form-group">
               					<label>kode instansi</label>
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
								<input name="no_surat" value="<?php echo $data['no_surat']; ?>" class="form-control" placeholder="nomor surat" required="">
								</div>
							<div class="form-group">
                				<label>Tanggal surat </label>
                  				<div class="input-group date">
                    			<div class="input-group-addon">
                    			<i class="fa fa-calendar"></i>
                    			</div>
                    
                    			<input  name="tanggal" id="calendar"  type="text" class="form-control" placeholder="">
                  				</div>
              					</div>
                			
								<div class="form-group">
								<label>isi surat</label>
								<input name="isi_surat" value="<?php echo $data['isi_surat']; ?>" class="form-control" placeholder="isi surat" required="">
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