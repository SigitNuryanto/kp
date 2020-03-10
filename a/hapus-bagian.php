<?php
$id = $_GET['id'];
$sql    = 'DELETE FROM bagian WHERE kd_bagian="'.$id.'"';
$query  = mysqli_query($db,$sql);
header('location: index.php?m=bagian');
?>