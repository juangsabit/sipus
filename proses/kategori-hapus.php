<?php
include'../koneksi.php';
$id_buku=$_GET['id'];

$con->query(
	"DELETE FROM kategori_buku
	WHERE idkategori='$id_buku'"
);
header("location:../home.php?p=buku-kategori");
?>