<?php
include'../koneksi.php';

$id_anggota=$_POST['id_anggota'];
$nama=$_POST['nama'];
$kelas=$_POST['kelas'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$tanggal = $_POST['tanggal'];

if(isset($_POST['simpan'])){
	$con->query(
		"UPDATE tbanggota
		SET nama='$nama',kelas='$kelas',jeniskelamin='$jenis_kelamin',tanggal='$tanggal',alamat='$alamat'
		WHERE idanggota='$id_anggota'"
	);
	header("location:../home.php?p=anggota");
}
?> 