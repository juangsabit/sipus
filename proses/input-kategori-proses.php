<?php
include'../koneksi.php';
if(isset($_POST['simpan'])){
	$con->query(
		"INSERT INTO kategori_buku (kategori)
    VALUES ('".$_POST["kategori"]."')");
    header("location:../home.php?p=buku-kategori");
}

?> 