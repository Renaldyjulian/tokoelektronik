<?php 
	session_start();
	// session_destroy();
	unset($_SESSION['admin']);
	echo "<script>alert('Logout berhasil');</script>";
	echo "<script>location = 'login.php';</script>";
 ?>