<?php
// koneksi database -------------------------------------------->
$hostname = "localhost";
$username = "root";
$password = "";
$database = "surat";
$db = new mysqli ( $hostname , $username , $password , $database );
echo $db->connect_errno?'Koneksi gagal : '.$db->connect_error:'';
//<--------------------------------------------------------------
?>