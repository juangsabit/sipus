<?php
	$con = mysqli_connect("localhost","root","","dbpus");

	$q_tampil_anggota=$con->query("SELECT * FROM tbanggota ORDER BY idanggota DESC LIMIT 1 ");
	while($row = mysqli_fetch_array($q_tampil_anggota))
{
	?>
<div id="label-page"><h3>Input Data Anggota</h3></div>
<div id="content">
	<form action="proses/anggota-input-proses.php" method="post" name="form" enctype="multipart/form-data">
	<table id="tabel-input">
		<tr>
			<td class="label-formulir">ID Anggota</td>
			<td class="isian-formulir"><input type="text" name="id_anggota" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<div>
			<tr>
				<td class="label-formulir">Nama</td>
				<td class="isian-formulir"><input type="text" name="nama" class="isian-formulir isian-formulir-border" required></td>
			</tr>
		
		<div>
		<div>
			<tr>
				<td class="label-formulir">Kelas</td>
				<td class="isian-formulir"><input type="text" name="kelas" class="isian-formulir isian-formulir-border" required></td>
			</tr>
		
		<div>
		<tr>
			<td class="label-formulir">Jenis Kelamin</td>
			<td class="isian-formulir"><input type="radio" name="jenis_kelamin" value="Pria" > Pria</label></td>
		</tr>
		</div>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="radio" name="jenis_kelamin" value="Wanita"> Wanita</td>
		</tr>
		<div>
			<tr>
				<td class="label-formulir">Tanggal Lahir</td>
				<td class="isian-formulir"><input type="date" name="tanggal" class="isian-formulir isian-formulir-border" required></td>
			</tr>
		<div>
		<div>
		<tr> 
			<td class="label-formulir">Alamat</td>
			<td class="isian-formulir"><textarea rows="2" cols="40" name="alamat" class="isian-formulir isian-formulir-border " required></textarea></td>
		</tr>
		</div>
		<div>
			<tr>
				<td class="label-formulir">Upload foto</td>
				<td class=""><input type="file" name="foto" required></td>
			</tr>
		
		<div>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" class="tombol"></td>
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

<?php 
}
?>