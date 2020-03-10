8<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="index.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
			<li class="active">bagsur</li>
		</ol>
	</div><!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Daftar pengguna</h1>
		</div>
	</div><!--/.row-->


	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">Tabel Daftar pengguna <a class="btn btn-info" style="float: right;" href="index.php?m=tambah-bagsur">Tambah </a></div>
				<div class="panel-body">
					<table data-toggle="table"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						<thead>
							<tr>
								<th data-checkbox="true">item_id</th>
								<th data-sortable="true">no</th>
								<th data-sortable="true">kode</th>
								<th data-sortable="true">nama</th>
								<th data-sortable="true">username</th>
								<th data-sortable="true">password</th>
								<th data-sortable="true">level</th>
								<th data-sortable="true">aksi</th>
															
							</tr>
						</thead>
						<tbody>
							<?php
							$no=1;
							$koneksi = "SELECT * from user order by kd_petugas desc" ;
							$query  = mysqli_query($db,$koneksi);
							while($data=mysqli_fetch_array($query))
							{
								?>
								<tr>
									<td></td>
									<td><?php echo $no; ?></td>
									<td><?php echo $data['kd_petugas']; ?></td>
									<td><?php echo $data['nama_petugas']; ?></td>
									<td><?php echo $data['username']; ?></td>
									<td><?php echo $data['password']; ?></td>
									<td><?php echo $data['level']; ?></td>
									<td>
										<a class="btn btn-xs btn-success" href="index.php?m=edit-bagsur&id=<?php echo $data['kd_petugas']; ?>">Ubah</a>
										<a class="btn btn-xs btn-danger" href="index.php?m=hapus-bagsur&id=<?php echo $data['kd_petugas']; ?>" onclick="return confirm('Yakin mau di hapus?');">Hapus</a>
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