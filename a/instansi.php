8<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="index.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
			<li class="active">instansi</li>
		</ol>
	</div><!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Daftar instansi</h1>
		</div>
	</div><!--/.row-->


	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">Tabel Daftar instansi <a class="btn btn-info" style="float: right;" href="index.php?m=tambah-instansi">Tambah </a></div>
				<div class="panel-body">
					<table data-toggle="table"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						<thead>
							<tr>
								<th data-checkbox="true">item_id</th>
								<th data-sortable="true">no</th>
								<th data-sortable="true">kode</th>
								<th data-sortable="true">nama</th>
								<th data-sortable="true">alamat</th>
								<th data-sortable="true">aksi</th>
								
							</tr>
						</thead>
						<tbody>
							<?php
							$no=1;
							$koneksi = "SELECT * from instansi order by kd_instansi desc" ;
							$query  = mysqli_query($db,$koneksi);
							while($data=mysqli_fetch_array($query))
							{
								?>
								<tr>
									<td></td>
									<td><?php echo $no; ?></td>
									<td><?php echo $data['kd_instansi']; ?></td>
									<td><?php echo $data['nama_instansi']; ?></td>
									<td><?php echo $data['alamat']; ?></td>
									<td>
										<a class="btn btn-xs btn-success" href="index.php?m=edit-instansi&id=<?php echo $data['kd_instansi']; ?>">Ubah</a>
										<a class="btn btn-xs btn-danger" href="index.php?m=hapus-instansi&id=<?php echo $data['kd_instansi']; ?>" onclick="return confirm('Yakin mau di hapus?');">Hapus</a>
									</td>
								</tr>
								<?php
								$no++;
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div><!--/.row-->	
	

</div><!--/.main-->