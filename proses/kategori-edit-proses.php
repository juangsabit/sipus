<?php
include'../koneksi.php';

$id_buku=$_POST['idkategori'];
$kategori=$_POST['kategori'];

If(isset($_POST['simpan'])){
	$con->query(
		"UPDATE kategori_buku
		SET kategori='$kategori'
		WHERE idkategori='$id_buku'"
	);
	header("location:../home.php?p=buku-kategori");
}
?>