<?php
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$sql = mysqli_query($this->koneksi(),
		"DELETE FROM tbl_karyawan WHERE id = '$id'");

		if($sql) {
			header('location:index.php');
		}else {
			echo "Data gagal dihapus".mysqli_error($sql);
		}
	}
?>