
<?php
	$host="remotemysql.com";
	$user="CKMUoT5BGi";
	$pass="kdyZxqDo9C";
	$database="CKMUoT5BGi";
	$conn=new mysqli($host,$user,$pass,$database);
	if (mysqli_connect_errno()) {
	  trigger_error('Koneksi ke database gagal: '  . mysqli_connect_error(), E_USER_ERROR); 
	}
?>
