<?php
$id = $_GET['id'];
$sql    = 'DELETE FROM user WHERE kd_petugas="'.$id.'"';
$query  = mysqli_query($db,$sql);
header('location: index.php?m=bagsur');
?>