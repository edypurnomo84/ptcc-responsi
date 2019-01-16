<?php
	$server = mysqli_connect("172.24.0.2", "root", "root",'db_kas');
	$db = mysqli_select_db($server, "db_kas");
	
	if(!$server){
		echo "Maaf, Gagal tersambung dengan server !";
	}
	if(!$db){
		echo "Maaf, Gagal tersambung dengan database !";
	}
?>