<div id="label-page"><h3>Tampil Data Anggota Berdasarkan Gender</h3></div>
<div id="content">
	<table id="tabel-tampil">
		<tr>
			<th id="label-tampil-no">No</td>
			<th>ID Anggota</th>
			<th>Nama</th>
			<th>Kelas</th>
			<th>Jenis Kelamin</th>
			<th>Alamat</th>
			<th id="label-opsi">Opsi</th>
		</tr>
		<?php
		$con = mysqli_connect("localhost","root","","dbpus");
        $q_pria=$con->query("SELECT * FROM tbanggota WHERE jeniskelamin ='Pria'");
		$q_tampil_anggota=$con->query("SELECT * FROM tbanggota ORDER BY idanggota DESC")or die(mysql_error());
        $nomor=1;
        $pria = mysqli_num_rows($q_pria); 
        echo '<p>Terdapat '.$pria.' Pria.</p> <br>';
		while($r_tampil_anggota=mysqli_fetch_array($q_pria)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $r_tampil_anggota['idanggota']; ?></td>
			<td><?php echo $r_tampil_anggota['nama']; ?></td>
			<td><?php echo $r_tampil_anggota['kelas']; ?></td>
			<td><?php echo $r_tampil_anggota['jeniskelamin']; ?></td>
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
    <table id="tabel-tampil">
		<tr>
			<th id="label-tampil-no">No</td>
			<th>ID Anggota</th>
			<th>Nama</th>
			<th>Kelas</th>
			<th>Jenis Kelamin</th>
			<th>Alamat</th>
			<th id="label-opsi">Opsi</th>
		</tr>
		<?php
		$con = mysqli_connect("localhost","root","","dbpus");
        $q_wanita=$con->query("SELECT * FROM tbanggota WHERE jeniskelamin ='Wanita'");
		$q_tampil_anggota=$con->query("SELECT * FROM tbanggota ORDER BY idanggota DESC")or die(mysql_error());
        $nomor=1;
        $wanita = mysqli_num_rows($q_wanita); 
        echo '<br><p>Terdapat '.$wanita.' Wanita.</p> <br>';
		while($r_tampil_anggota=mysqli_fetch_array($q_wanita)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $r_tampil_anggota['idanggota']; ?></td>
			<td><?php echo $r_tampil_anggota['nama']; ?></td>
			<td><?php echo $r_tampil_anggota['kelas']; ?></td>
			<td><?php echo $r_tampil_anggota['jeniskelamin']; ?></td>
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


