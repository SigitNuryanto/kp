<?php
$id = $_GET['id'];
$sql    = 'DELETE FROM surat_masuk WHERE kd_masuk="'.$id.'"';
$query  = mysqli_query($db,$sql);
header('location: index.php?m=surat-masuk');
?>