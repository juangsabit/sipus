<?php
session_start();
include'koneksi.php';
$tgl=date('Y-m-d');

?>
<!doctype html>
<html>
<head>
	<title>Sistem Informasi Perpustakaan</title>
	<link rel="icon" href="images/mts.png" type="image/png" sizes="16x16">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="container">
		<div id="header">
			<div id="logo-perpustakaan-container">
			<a href="home.php">
				<image id="logo-perpustakaan" src="images/mts.png">
			</a>
			</div>
			<div id="nama-alamat-perpustakaan-container">
				<div class="nama-alamat-perpustakaan">
					<h1>MTSN 1 GUNUNG KIDUL</h1>
				</div>
				<div class="nama-alamat-perpustakaan">
					<h4>Gubukrubuh, Getas, Playen, Gunungkidul, DIY, 55861</h4>
				</div>
			</div>
		</div>
		<div id="header2">
			<div id="nama-user">Hai, Admin</div>
			<a href="index.php" id="nama-user2">Keluar</a>
		</div>
		<div id="sidebar">
			<a href="home.php">Home</a>
			<p class="label-navigasi">Input Data Dan Transaksi</p>
			<ul>
				<li><a href="home.php?p=about">Profil</a></li>
				<li><a href="home.php?p=user">Data Petugas</a></li>
				<li><a href="home.php?p=anggota">Data Anggota</a></li>
				<li><a href="home.php?p=buku">Data Buku</a></li>
				<li><a href="home.php?p=transaksi-peminjaman">Transaksi Peminjaman</a></li>
			</ul>
			<p class="label-navigasi">Laporan</p>
			<ul>
				<li><a href="cetak/cetak-user.php" target="_blank">Lap.Data Petugas</a></li>
				<li><a href="cetak/cetak-anggota.php" target="_blank">Lap.Data Anggota</a></li>
				<li><a href="cetak/cetak-buku.php" target="_blank">Lap.Data Buku</a></li>
				<li><a href="cetak/cetak-transaksi-peminjaman.php" target="_blank">Lap.Peminjaman</a></li>
				<li><a href="cetak/cetak-transaksi-peminjaman-pengembalian.php" target="_blank">Lap.Peminjaman dan Pengembalian</a></li>
			</ul>
		</div>
		<div id="content-container">
		<?php
			$pages_dir='pages';
			if(!empty($_GET['p'])){
				$pages=scandir($pages_dir,0);
				unset($pages[0],$pages[1]);
				$p=$_GET['p'];
				if(in_array($p.'.php',$pages)){
					include($pages_dir.'/'.$p.'.php');
				}else{
					echo'Halaman Tidak Ditemukan';
				}
			}else{
				include($pages_dir.'/beranda.php');
			}
		?>
		</div>
		<div id="footer"><h3 style="color:white">© Copyright 2018. TIF UIN SUKA. All Rights Reserved.</h3></div>
	</div>
</body>
</html>