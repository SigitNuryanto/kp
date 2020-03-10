<?php
session_start();
include "koneksi.php";

if(isset($_POST['username']) && ($_POST['password'])){
	 $username = $db->real_escape_string($_POST['username']);
	 $password = $db->real_escape_string(($_POST['password']));
	 $sql = "select * from user where username = '$username' AND password = '$password'";
	 $result = $db->query($sql) or die('Terjadi Kesalahan : '.$db->error);
	
	if ($result->num_rows == 1){
		  $row = $result->fetch_assoc();

		  $_SESSION['username'] = $row['username'];
		  $_SESSION['nama'] = $row['nama'];
		  $_SESSION['level'] = $row['level'];
		  $_SESSION['kd_petugas'] = $row['kd_petugas'];
		  header("location:index.php");
		  $_SESSION['pesan'] = '<p><div class="alert alert-success">Selamat datang <b>'.$_SESSION['nama_petugas'].'</b></div></p>';
  
	}else{
		  echo "<script>alert('Maaf, usrename atau password salah..');location.href='login.php'</script>";
	}
}else{
	 echo "<script>alert('Maaf, usrename atau password salah..');location.href='login.php'</script>";
}
?>
