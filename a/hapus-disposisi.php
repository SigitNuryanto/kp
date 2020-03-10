<?php
$id = $_GET['id'];
$sql    = 'DELETE FROM disposisi WHERE kd_disposisi="'.$id.'"';
$query  = mysqli_query($db,$sql);
header('location: index.php?m=disposisi');
?>