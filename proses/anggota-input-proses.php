<?php
include'../koneksi.php';

$id_anggota=$_POST['id_anggota'];
$nama=$_POST['nama'];
$kelas=$_POST['kelas'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$status="Tidak Meminjam";
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
$tanggal = $_POST['tanggal'];

$fotobaru = date('dmYHis').$foto;
// Set path folder tempat menyimpan fotonya
$path = "../images/".$fotobaru;
if(move_uploaded_file($tmp, $path)){
echo "berhasil";
}
if(isset($_POST['simpan'])){
	$con->query(
		"INSERT INTO tbanggota
		VALUES('$id_anggota','$nama','$kelas','$jenis_kelamin','$tanggal','$alamat','$fotobaru','$status')"
	);
	header("location:../home.php?p=anggota");
}
?> 