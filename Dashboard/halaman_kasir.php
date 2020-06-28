<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['role']==""){
		header("location:../index.php?pesan=gagal");
	}
 
	?>
<html>
<head>
	<title>ini kasir</title>
</head>
<body>
	<marquee>ini kasir</marquee>
	<h1>HAiii <?php echo $_SESSION['nama'] ?></h1>
	<a href="../Auth/logout.php">LOGOUT</a>
</body>
</html>