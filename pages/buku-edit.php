<?php
	$id_buku=$_GET['id'];
	$con = mysqli_connect("localhost","root","","dbpus");

	$q_tampil_buku=$con->query("SELECT * FROM tbbuku WHERE idbuku='$id_buku'");
	$r_tampil_buku=mysqli_fetch_array($q_tampil_buku);
?>
<div id="label-page"><h3>Edit Data Buku</h3></div>
<div id="content">
	<form action="proses/buku-edit-proses.php" method="post">
	<table id="tabel-input">
		<tr>
			<td class="label-formulir">ID Buku</td>
			<td class="isian-formulir"><input type="text" name="id_buku" value="<?php echo $r_tampil_buku['idbuku']; ?>" readonly="readonly" class="isian-formulir isian-formulir-border warna-formulir-disabled"></td>
		</tr>
		<tr>
			<td class="label-formulir">Judul Buku</td>
			<td class="isian-formulir"><input type="text" name="judul_buku" value="<?php echo $r_tampil_buku['judulbuku']; ?>" class="isian-formulir isian-formulir-border" required></td>
		</tr>
		<tr>
			<td class="label-formulir">Kategori</td>
			<td class="isian-formulir">
			<select name="kategori" class="isian-formulir isian-formulir-border">
					<option value="<?php echo $r_tampil_buku['kategori']; ?>" select="selected"><?php echo $r_tampil_buku['kategori']; ?></option>
					<?php					
					$con = mysqli_connect("localhost","root","","dbpus");
					$q_tampil_kategori=$con->query(
							"SELECT * FROM kategori_buku"
						);
						while($r_tampil_kategori=mysqli_fetch_array($q_tampil_kategori)){
							echo"<option value='$r_tampil_kategori[kategori]'>$r_tampil_kategori[kategori]</option>";
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td class="label-formulir">Pengarang</td>
			<td class="isian-formulir"><input type="text" name="pengarang" value="<?php echo $r_tampil_buku['pengarang']; ?>" class="isian-formulir isian-formulir-border" required></td>
		</tr>
		<tr>
			<td class="label-formulir">Penerbit</td>
			<td class="isian-formulir"><input type="text" name="penerbit" value="<?php echo $r_tampil_buku['penerbit']; ?>" class="isian-formulir isian-formulir-border" required></td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" class="tombol" name="simpan" value="Simpan" id="tombol-simpan"></td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><a onclick="myFunction()" class="tombol">Cancel</a></td>
		</tr>

		<script>
		function myFunction() {
			var txt;
			var r = confirm("Apakah anda yakin akan Cancel?");
			if (r == true) {
				txt = "You pressed OK!";
				window.location = "home.php?p=buku";
			} else {
				txt = "You pressed Cancel!";
			}
			document.getElementById("demo").innerHTML = txt;
		}
		</script>
	</table>
	</form>
</div>