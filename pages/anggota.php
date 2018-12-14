<div id="label-page"><h3>Tampil Data Anggota</h3></div>
<div id="content">
	<table>
		<tr>
			<th><p id="tombol-tambah-container"><a href="home.php?p=anggota-input" class="tombol">Tambah Data</a></p></th>
			<th><p id="tombol-tambah-container"><a href="home.php?p=anggota-jk" class="tombol">Data Berdasarkan Gender</a></p>
			</th>
		</tr>
	</table>
	<table id="tabel-tampil">
		<tr>
			<th id="label-tampil-no">No</td>
			<th>ID Anggota</th>
			<th>Nama</th>
			<th>Kelas</th>
			<th>Jenis Kelamin</th>
			<th>Tanggal Lahir</th>
			<th>Alamat</th>
			<th id="label-opsi">Opsi</th>
		</tr>
		<?php
		$con = mysqli_connect("localhost","root","","dbpus");

		$q_tampil_anggota=$con->query("SELECT * FROM tbanggota ORDER BY idanggota ASC")or die(mysql_error());
		$nomor=1;
		while($r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $r_tampil_anggota['idanggota']; ?></td>
			<td><?php echo $r_tampil_anggota['nama']; ?></td>
			<td><?php echo $r_tampil_anggota['kelas']; ?></td>
			<td><?php echo $r_tampil_anggota['jeniskelamin']; ?></td>
			<td><?php echo $r_tampil_anggota['tanggal']; ?></td>
			<td><?php echo $r_tampil_anggota['alamat']; ?></td>
			<td>
				<div class="tombol-opsi-container"><a href="cetak/cetak-kartu-identitas-anggota.php?id=<?php echo $r_tampil_anggota['idanggota']; ?>" target="_blank" class="tombol">Cetak Kartu</a></div>
				<div class="tombol-opsi-container"><a href="home.php?p=anggota-edit&id=<?php echo $r_tampil_anggota['idanggota'];?>" class="tombol">Edit</a></div>
				<div class="tombol-opsi-container"><a onclick="myFunction<?php echo $r_tampil_anggota['idanggota']; ?>()" class="tombol" >Hapus</a>
				</div>
			</td>
		</tr>
		
		<script>
		function myFunction<?php echo $r_tampil_anggota['idanggota']; ?>() {
			var txt;
			var r = confirm("Apakah anda yakin akan menghapus?");
			if (r == true) {
				txt = "You pressed OK!";
				window.location = "proses/anggota-hapus.php?id=<?php echo $r_tampil_anggota['idanggota']; ?>";
			} else {
				txt = "You pressed Cancel!";
			}
			document.getElementById("demo").innerHTML = txt;
		}
		</script>

		<?php } ?>
	</table>
</div>


