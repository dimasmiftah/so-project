<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['role']==""){
		header("location:../index.php?pesan=gagal");
	}
 
	?>
<html>
<head>
	<title>ini admin</title>
</head>
<body>
	<marquee>ini admin</marquee>
	<h1>HAiii <?php echo $_SESSION['nama'] ?></h1>
	<a href="../User_Management/index.php">User Management</a><br>
	<a href="../Auth/logout.php">LOGOUT</a>
</body>
</html>