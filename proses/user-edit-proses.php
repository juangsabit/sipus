<?php
include'../koneksi.php';

$id_user=$_POST['id_user'];
$nama=$_POST['username'];
$alamat=$_POST['alamat'];
$password=$_POST['password'];

$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

$fotobaru = date('dmYHis').$foto;
// Set path folder tempat menyimpan fotonya
$path = "../imgpetugas/".$fotobaru;
if(move_uploaded_file($tmp, $path)){
echo "berhasil";
}

if(isset($_POST['simpan'])){
	$con->query(
		"UPDATE tbuser
		SET username='$nama', pass='$password',alamat='$alamat'
		WHERE iduser='$id_user'"
	);
	header("location:../home.php?p=user");
}
?>