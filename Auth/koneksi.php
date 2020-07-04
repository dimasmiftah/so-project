<?php 
$koneksi = mysqli_connect("localhost","root","","tubes_so");

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

if(isset($_SESSION['role']=="admin")){
 
		
		header("location:../Dashboard/halaman_admin.php");
 
	// cek jika user login sebagai kasir
	}else if(isset($_SESSION['role']=="kasir")){
		
		header("location:../Dashboard/halaman_kasir.php");
 
	}else{
 
		// alihkan ke halaman login kembali
		header("location:../index.php?pesan=gagal");
	}	

?>