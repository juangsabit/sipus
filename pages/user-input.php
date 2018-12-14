<?php
	$con = mysqli_connect("localhost","root","","dbpus");

	$q_tampil_user=$con->query("SELECT * FROM tbuser ORDER BY iduser DESC LIMIT 1 ");
	while($row = mysqli_fetch_array($q_tampil_user))
{
	?>
<div id="label-page"><h3>Input Data User</h3></div>
<div id="content">
	<form action="proses/user-input-proses.php" method="post" enctype="multipart/form-data">
	<table id="tabel-input">
		<tr>
			<td class="label-formulir">ID User</td>
			<td class="isian-formulir"><input type="text" name="id_user" value="<?php echo $row['iduser']+1 ?>" readonly="readonly" class="isian-formulir isian-formulir-border warna-formulir-disabled"></td>
		</tr>
		<tr>
			<td class="label-formulir">Username</td>
			<td class="isian-formulir"><input type="text" name="username" required class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Password</td>
			<td class="isian-formulir"><input type="password" name="password" id="myInput"  required class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="checkbox" onclick="ShowPass()"> Show Password</td>
		</tr>
		<tr>
			<td class="label-formulir">Alamat</td>
			<td class="isian-formulir"><textarea rows="2" cols="40" name="alamat" required class="isian-formulir isian-formulir-border"></textarea></td>
		</tr>
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
				window.location = "home.php?p=user";
			} else {
				txt = "You pressed Cancel!";
			}
			document.getElementById("demo").innerHTML = txt;
		}
		function ShowPass() {
		var x = document.getElementById("myInput");
		if (x.type === "password") {
			x.type = "text";
		} else {
			x.type = "password";
		}
		}
		</script>
	</table>
	</form>
</div>

<?php } ?>