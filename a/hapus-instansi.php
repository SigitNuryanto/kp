<?php
$id = $_GET['id'];
$sql    = 'DELETE FROM instansi WHERE kd_instansi="'.$id.'"';
$query  = mysqli_query($db,$sql);
header('location: index.php?m=instansi');
?>