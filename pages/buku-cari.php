<div id="label-page"><h3>Tampil Data Buku</h3></div>
<div id="content">
	<form action="home.php?p=buku-cari" method="post">
	<input id="tombol-tambah-container2" type="submit" class="tombol" value="Search" name="submit">
	<input id="tombol-tambah-container2" type="text" name="cari" placeholder="<?php echo $_POST['cari']; ?>" autocomplete="off">
	</form>
	<table>
		<tr>
			<th><p id="tombol-tambah-container"><a href="home.php?p=buku-input" class="tombol">Tambah Data</a></p></th>
			<th><p id="tombol-tambah-container"><a href="home.php?p=buku-kategori" class="tombol">Kategori Buku</a></p>
			</th>
		</tr>
	</table>
	<table id="tabel-tampil">
		<tr>
			<th id="label-tampil-no">No</td>
			<th>ID Buku</th>
			<th>Judul Buku</th>
			<th>Kategori</th>
			<th>Pengarang</th>
			<th>Penerbit</th>
			<th id="label-opsi2">Opsi</th>
		</tr>
		<?php
		$con = mysqli_connect("localhost","root","","dbpus");
	
		$data=$con->query("SELECT * FROM tbbuku ORDER BY idbuku ASC")or die(mysql_error());
            if (isset($_POST['submit'])){
            $cari = $_POST['cari'];
            $data  = mysqli_query($con, "SELECT * FROM tbbuku WHERE judulbuku LIKE '%$cari%' OR kategori LIKE '%$cari%' ");
            $jumlah = mysqli_num_rows($data); 
            $nomor=1;
        if(mysqli_num_rows($data)>0){
            echo '<p>Ada '.$jumlah.' data yang sesuai.</p>';
            $jumlah = mysqli_num_rows($data); 
            $nomor=1;
		while($r_tampil_buku=mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $r_tampil_buku['idbuku']; ?></td>
			<td><?php echo $r_tampil_buku['judulbuku']; ?></td>
			<td><?php echo $r_tampil_buku['kategori']; ?></td>
			<td><?php echo $r_tampil_buku['pengarang']; ?></td>
			<td><?php echo $r_tampil_buku['penerbit']; ?></td>
			<td>
				<div class="tombol-opsi-container"><a href="home.php?p=buku-edit&id=<?php echo $r_tampil_buku['idbuku'];?>" class="tombol">Edit</a></div>
				<div class="tombol-opsi-container"><a onclick="myFunction<?php echo $r_tampil_buku['idbuku']; ?>()" class="tombol">Hapus</a></div>
			</td>
			<?php } ?>
			<?php } else { ?>
            <td>Data tidak ditemukan</td>
			<?php } ?>
			<?php } ?>
		</tr>

		<script>
		function myFunction<?php echo $r_tampil_buku['idbuku']; ?>() {
			var txt;
			var r = confirm("Apakah anda yakin akan menghapus?");
			if (r == true) {
				txt = "You pressed OK!";
				window.location = "proses/buku-hapus.php?id=<?php echo $r_tampil_buku['idbuku']; ?>";
			} else {
				txt = "You pressed Cancel!";
			}
			document.getElementById("demo").innerHTML = txt;
		}
		</script>
		
	</table>
</div>