<?php
include'../koneksi.php';
$id_buku=$_GET['id'];

$con->query(
	"DELETE FROM tbbuku
	WHERE idbuku='$id_buku'"
);
header("location:../home.php?p=buku");
?>