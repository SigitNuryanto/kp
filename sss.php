<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">      
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="index.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
      <li class="active">disposisi</li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Daftar disposisi</h1>
    </div>
  </div><!--/.row-->


  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading">Tabel Daftar surat masuk <a class="btn btn-info" style="float: right;" href="index.php?m=tambah-disposisi">Tambah </a></div>
        <div class="panel-body">
          <table data-toggle="table"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
            <thead>
              <tr>
                <th data-checkbox="true">item_id</th>
                <th data-sortable="true">no</th>
                <th data-sortable="true">kode disposisi</th>
               <th data-sortable="true"> bagian</th>
                <th data-sortable="true">isi dispo</th>
                <th data-sortable="true">sifat</th>
                <th data-sortable="true">batas</th>
                <th data-sortable="true">catatan</th>
                <th data-sortable="true">nomor surat</th>
                <th data-sortable="true">petugas</th>
                <th data-sortable="true">aksi</th>
                              
              </tr>
            </thead>
            <tbody>
              <?php
              $no=1;
              /*
              $koneksi = "SELECT kd_disposisi, isi_dispo, sifat,catatan, kd_masuk_surat, kd_petugas_sur ,kd_bagian_s FROM disposisi
              INNER JOIN surat_masuk ON kd_masuk_surat=kd_masuk
              INNER JOIN tb_bagian_surat ON kd_petugas_sur=kd_petugas
              INNER JOIN bagian ON kd_bagian_s=kd_bagian
              order by kd_disposisi desc"  ;
              $query  = mysqli_query($db,$koneksi);
              if($query == false){
              die ("Terjadi Kesalahan : ". mysqli_error($db));
            }
              */
              $db_disposisi  = mysqli_query($db, "SELECT * FROM disposisi");

              while($data=mysqli_fetch_array($db))
              {
                ?>
                <tr>
                  <td></td>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $data['kd_disposisi']; ?></td>
                  <td><?php echo $data['nama_bagian']; ?></td>
                  <td><?php echo $data['isi_dispo']; ?></td>
                  <td><?php echo $data['sifat']; ?></td>
                  <td><?php echo $data['tgl_surat']; ?></td>
                  <td><?php echo $data['catatan']; ?></td>
                  <td><?php echo $data['no_surat']; ?></td>
                  <td><?php echo $data['nama_petugas']; ?></td>
                  
                  <td>
                    <a class="btn btn-xs btn-success" href="index.php?m=edit-disposisi&id=<?php echo $data['kd_disposisi']; ?>">Ubah</a>
                    <a class="btn btn-xs btn-danger" href="index.php?m=hapus-surmak&id=<?php echo $data['kd_disposisi']; ?>" onclick="return confirm('Yakin mau di hapus?');">Hapus</a>
                    <a class="btn btn-xs btn-info" href="file/<?php echo $data['file']; ?>">cetak</a>
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