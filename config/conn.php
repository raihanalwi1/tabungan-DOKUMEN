
<?php
	$host="localhost";
	$user="alwi";
	$pass="9Ofg5j%0";
	$database="db_tabungan";
	$conn=new mysqli($host,$user,$pass,$database);
	if (mysqli_connect_errno()) {
	  trigger_error('Koneksi ke database gagal: '  . mysqli_connect_error(), E_USER_ERROR); 
	}
?>