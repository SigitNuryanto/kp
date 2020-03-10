8<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">      
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="index.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
      <li class="active">surat keluar</li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Daftar surat keluar</h1>
    </div>
  </div><!--/.row-->


  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading">Tabel Daftar surat keluar <a class="btn btn-info" style="float: right;" href="index.php?m=tambah-surke">Tambah </a></div>
        <div class="panel-body">
          <table data-toggle="table"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
            <thead>
              <tr>
                <th data-checkbox="true">item_id</th>
                <th data-sortable="true">no</th>
                <th data-sortable="true">kode keluar</th>
               <th data-sortable="true">kode petugas</th>
                <th data-sortable="true">kode instansi</th>
                <th data-sortable="true">no surat</th>
                <th data-sortable="true">isi surat</th>
                <th data-sortable="true">tanggal</th>
                <th data-sortable="true">file</th>
                <th data-sortable="true">aksi</th>
                              
              </tr>
            </thead>
            <tbody>
              <?php
              $no=1;
              $koneksi = "SELECT kd_keluar, kd_petugas_surat, kd_instansi_surat, no_surat, isi_surat,
              tanggal, file_nama FROM surat_keluar 
              INNER JOIN instansi ON kd_instansi_surat=kd_instansi
              INNER JOIN user ON kd_petugas_surat=kd_petugas
              order by kd_keluar desc"  ;
              $query  = mysqli_query($db,$koneksi);
              if($query == false){
              die ("Terjadi Kesalahan : ". mysqli_error($db));
            }
              while($data=mysqli_fetch_array($query))
              {
                ?>
                <tr>
                  <td></td>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $data['kd_keluar']; ?></td>
                  <td><?php echo $data['kd_petugas_surat']; ?></td>
                  <td><?php echo $data['kd_instansi_surat']; ?></td>
                  <td><?php echo $data['no_surat']; ?></td>
                  <td><?php echo $data['isi_surat']; ?></td>
                  <td><?php echo $data['tanggal']; ?></td>
                  <td><?php echo $data['file_nama']; ?></td>
                  <td>
                    <a class="btn btn-xs btn-success" href="index.php?m=edit-surke&id=<?php echo $data['kd_keluar']; ?>">Ubah</a>
                    <a class="btn btn-xs btn-danger" href="index.php?m=hapus-surat-keluar&id=<?php echo $data['kd_keluar']; ?>" onclick="return confirm('Yakin mau di hapus?');">Hapus</a>
                    <a class="btn btn-xs btn-info" href="index.php?m=tampil&id=<?php echo $data['kd_keluar']; ?>">
                    tampilkan</a>
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