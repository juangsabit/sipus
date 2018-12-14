<div id="label-page"><h3>Tampil Data Petugas</h3></div>
<div id="content">
	<p id="tombol-tambah-container"><a href="home.php?p=user-input" class="tombol">Tambah Data</a></p>
	<table id="tabel-tampil">
		<tr>
			<th id="label-tampil-no">No</td>
			<th>ID User</th>
			<th>Username</th>
			<th>Alamat</th>
			<th id="label-opsi">Opsi</th>
		</tr>
		<?php
		$con = mysqli_connect("localhost","root","","dbpus");

		$q_tampil_user= $con->query("SELECT * FROM tbuser ORDER BY iduser")or die(mysqli_error());
		$nomor=1;
		while($r_tampil_user=mysqli_fetch_array($q_tampil_user)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $r_tampil_user['iduser']; ?></td>
			<td><?php echo $r_tampil_user['username']; ?></td>
			<td><?php echo $r_tampil_user['alamat']; ?></td>
			<td>
				<div class="tombol-opsi-container"><a href="cetak/cetak-kartu-identitas-user.php?id=<?php echo $r_tampil_user['iduser']; ?>" target="_blank" class="tombol">Cetak Kartu</a></div>
				<div class="tombol-opsi-container"><a href="home.php?p=user-edit&id=<?php echo $r_tampil_user['iduser'];?>" class="tombol">Edit</a></div>
				<div class="tombol-opsi-container"><a onclick="myFunction<?php echo $r_tampil_user['iduser']; ?>()" class="tombol">Hapus</a></div>
			</td>
		</tr>
		<script>
		function myFunction<?php echo $r_tampil_user['iduser']; ?>() {
			var txt;
			var r = confirm("Apakah anda yakin akan menghapus?");
			if (r == true) {
				txt = "You pressed OK!";
				window.location = "proses/user-hapus.php?id=<?php echo $r_tampil_user['iduser']; ?>";
			} else {
				txt = "You pressed Cancel!";
			}
			document.getElementById("demo").innerHTML = txt;
		}
		</script>
		<?php } ?>
	</table>
</div>