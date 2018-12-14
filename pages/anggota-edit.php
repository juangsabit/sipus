<?php
	$id_anggota=$_GET['id'];
	$con = mysqli_connect("localhost","root","","dbpus");

	$q_tampil_anggota=$con->query("SELECT * FROM tbanggota WHERE idanggota='$id_anggota'");
	$r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota);
?>
<div id="label-page"><h3>Edit Data Anggota</h3></div>
<div id="content">
	<form action="proses/anggota-edit-proses.php" method="post">
	<table id="tabel-input">
		<tr>
			<td class="label-formulir">ID Anggota</td>
			<td class="isian-formulir"><input type="text" name="id_anggota" value="<?php echo $r_tampil_anggota['idanggota']; ?>" readonly="readonly" class="isian-formulir isian-formulir-border warna-formulir-disabled"></td>
		</tr>
		<tr>
			<td class="label-formulir">Nama</td>
			<td class="isian-formulir"><input type="text" name="nama" value="<?php echo $r_tampil_anggota['nama']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Kelas</td>
			<td class="isian-formulir"><input type="text" name="kelas" value="<?php echo $r_tampil_anggota['kelas']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Jenis Kelamin</td>
			<td class="isian-formulir"><input type="radio" name="jenis_kelamin" value="Pria" 
			<?php  if($r_tampil_anggota['jeniskelamin']=='Pria')
			{ ?>
				checked
			<?php
			}
			?>> Pria</label></td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="radio" name="jenis_kelamin" value="Wanita"
			<?php  if($r_tampil_anggota['jeniskelamin']=='Wanita')
			{ ?>
				checked
			<?php
			}
			?>
			> Wanita</td>
		</tr>
		<div>
			<tr>
				<td class="label-formulir">Tanggal Lahir</td>
				<td class="isian-formulir"><input type="date" name="tanggal" value="<?php echo $r_tampil_anggota['tanggal']; ?>" class="isian-formulir isian-formulir-border" required></td>
			</tr>
		<div>
		<tr>
			<td class="label-formulir">Alamat</td>
			<td class="isian-formulir"><textarea rows="2" cols="40" name="alamat" class="isian-formulir isian-formulir-border"><?php echo $r_tampil_anggota['alamat']; ?></textarea></td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" id="tombol-simpan" class="tombol"></td>
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
				window.location = "home.php?p=anggota";
			} else {
				txt = "You pressed Cancel!";
			}
			document.getElementById("demo").innerHTML = txt;
		}
		</script>
	</table>
	</form>
</div>