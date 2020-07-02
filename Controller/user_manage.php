<?php
include '../Auth/koneksi.php';


	$type = $_POST['tipe'];
	$id = $_POST['id'];
	if ($type == 'delete') {
		mysqli_query($koneksi,"delete from user where id_user='$id'");
	}

?>