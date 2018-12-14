<?php
include'../koneksi.php';
$id_transaksi=$_POST['id_transaksi'];
$id_anggota=$_POST['id_anggota'];
$id_buku=$_POST['id_buku'];
$tgl_pinjam=$_POST['tgl_pinjam'];
$status_anggota="Sedang Meminjam";
$status_buku="Dipinjam"; 

if(isset($_POST['simpan'])){
	$con->query(
		"INSERT INTO tbtransaksi
		VALUES('$id_transaksi','$id_anggota','$id_buku','$tgl_pinjam','')"
	);
	$con->query(
		"UPDATE tbanggota
		SET status='$status_anggota'
		WHERE idanggota='$id_anggota'"
	);
	$con->query(
		"UPDATE tbbuku
		SET status='$status_buku'
		WHERE idbuku='$id_buku'"
	);
	header("location:../home.php?p=transaksi-peminjaman");
}
?>