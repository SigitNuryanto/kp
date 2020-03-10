<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="index.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
			<li class="active">bagian</li>
		</ol>
	</div><!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Daftar bagian</h1>
		</div>
	</div><!--/.row-->


	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">Tabel Daftar bagian <a class="btn btn-info" style="float: right;" href="index.php?m=tambah-bagian">Tambah </a></div>
				<div class="panel-body">
					<table data-toggle="table"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						<thead>
							<tr>
								<th data-checkbox="true">item_id</th>
								<th data-sortable="true">no</th>
								<th data-sortable="true">kode</th>
								<th data-sortable="true">bagian</th>
								<th data-sortable="true">nama</th>
								<th data-sortable="true">jabatan</th>
								<th data-sortable="true">aksi</th>
															
							</tr>
						</thead>
						<tbody>
							<?php
							$no=1;
							$koneksi = "SELECT * from bagian order by kd_bagian desc" ;
							$query  = mysqli_query($db,$koneksi);
							while($data=mysqli_fetch_array($query))
							{
								?>
								<tr>
									<td></td>
									<td><?php echo $no; ?></td>
									<td><?php echo $data['kd_bagian']; ?></td>
									<td><?php echo $data['nama_bagian']; ?></td>
									<td><?php echo $data['nama']; ?></td>
									<td><?php echo $data['jabatan']; ?></td>
									<td>
										<a class="btn btn-xs btn-success" href="index.php?m=edit-bagian&id=<?php echo $data['kd_bagian']; ?>">Ubah</a>
										<a class="btn btn-xs btn-danger" href="index.php?m=hapus-bagian&id=<?php echo $data['kd_bagian']; ?>" onclick="return confirm('Yakin mau di hapus?');">Hapus</a>
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