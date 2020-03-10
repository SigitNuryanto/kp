<?php

if ($m=='home') {

}
if(file_exists('a/'.$m.'.php')){
	include ('a/'.$m.'.php'); 
}else{
	echo "<center>Halaman tidak ada</center>";
}
?>