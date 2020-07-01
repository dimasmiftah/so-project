<?php
include '../Auth/koneksi.php';

 function index() {
	$type = $_POST['tipe'];
	$id = $_POST['id'];
	if ($type == 'delete') {
		delete_user($id);
	}
}

 function delete_user($id)
{
	
	$delete = mysqli_query($koneksi,"delete from user where id_user='$id'");
	if ($delete) {
		return true;
	}else{
		return false;
	}
}
?>