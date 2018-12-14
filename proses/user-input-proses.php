<?php
include'../koneksi.php';

$id_user=$_POST['id_user'];
$username=$_POST['username'];
$password=$_POST['password'];
$alamat=$_POST['alamat'];
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
		"INSERT INTO tbuser
		VALUES('$id_user','$username','$password','$alamat','$fotobaru')"
	);
	header("location:../home.php?p=user");
} 
?>