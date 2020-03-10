<?php
$id = $_GET['id'];
$sql    = 'DELETE FROM surat_keluar WHERE kd_keluar="'.$id.'"';
$query  = mysqli_query($db,$sql);
header('location: index.php?m=surat-keluar');
?>