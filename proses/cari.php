<?php 
	$con = mysqli_connect("localhost","root","","dbpus");
	if (isset($_POST['submit'])){
	$cari = $_POST['cari'];
	$data  = mysqli_query($con, "SELECT * FROM tbbuku WHERE judulbuku LIKE '%$cari%' OR kategori LIKE '%$cari%' ");
	$jumlah = mysqli_num_rows($data); 
	$nomor=1;
	if(mysqli_num_rows($data)>0){
	echo '<p>Ada '.$jumlah.' data yang sesuai.</p>';
	header("location:../home.php?p=buku");
?>