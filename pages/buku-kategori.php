<div id="label-page"><h3>Tampil Data Kategori</h3></div>
<div id="content">
	<!-- <input id="tombol-tambah-container2" type="text" placeholder="Type here">
	<input id="tombol-tambah-container2" type="submit" class="tombol" value="Search"> -->
	<table>
		<tr>
			<th><p id="tombol-tambah-container"><a href="home.php?p=buku" class="tombol"> ⬅ Kembali</a></p></th>
			<th><p id="tombol-tambah-container"><a href="home.php?p=buku-kategori-input" class="tombol">Tambah Kategori</a></p></th>
			</th>
		</tr>
	</table>
	<table id="tabel-tampil">
		<tr>
			<th id="label-tampil-no">No</td>
			<th>Kategori</th>
			<th id="label-opsi2">Opsi</th>
		</tr>
		<?php
		$con = mysqli_connect("localhost","root","","dbpus");

		$q_tampil_buku=$con->query("SELECT * FROM kategori_buku ORDER BY idkategori ASC")or die(mysql_error());
		$nomor=1;
		while($r_tampil_buku=mysqli_fetch_array($q_tampil_buku)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $r_tampil_buku['kategori']; ?></td>
			<td>
				<div class="tombol-opsi-container"><a href="home.php?p=buku-kategori-edit&id=<?php echo $r_tampil_buku['idkategori'];?>" class="tombol">Edit</a></div>
				<div class="tombol-opsi-container"><a onclick="myFunction<?php echo $r_tampil_buku['idkategori']; ?>()" class="tombol">Hapus</a></div>
			</td>
		</tr>

		<script>
		function myFunction<?php echo $r_tampil_buku['idkategori']; ?>() {
			var txt;
			var r = confirm("Apakah anda yakin akan menghapus?");
			if (r == true) {
				txt = "You pressed OK!";
				window.location = "proses/kategori-hapus.php?id=<?php echo $r_tampil_buku['idkategori']; ?>";
			} else {
				txt = "You pressed Cancel!";
			}
			document.getElementById("demo").innerHTML = txt;
		}
		</script>
		
		<?php } ?>
	</table>
</div>