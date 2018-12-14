<?php
	$iduser=$_GET['id'];
	$con = mysqli_connect("localhost","root","","dbpus");
	$q_tampil_user=$con->query("SELECT * FROM tbuser WHERE iduser='$iduser'");
	$r_tampil_user=mysqli_fetch_array($q_tampil_user);
	// $img = $con->query("SELECT * FROM foto WHERE username='$username'");
	// $r_img = mysqli_fetch_array($img);
	$image = $r_tampil_user['foto'];
?>
<div id="label-page"><h3>Edit Data User</h3></div>
<div id="content">
	<form action="proses/user-edit-proses.php" method="post" enctype="multipart/form-data">
	<table id="tabel-input">
		<tr>
			<td class="label-formulir">ID User</td>
			<td class="isian-formulir"><input type="text" name="id_user" value="<?php echo $r_tampil_user['iduser']; ?>" readonly="readonly" class="isian-formulir isian-formulir-border warna-formulir-disabled"></td>
		</tr>
		<tr>
			<td class="label-formulir">Nama Lengkap</td>
			<td class="isian-formulir"><input type="text" name="username" value="<?php echo $r_tampil_user['username']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Alamat</td>
			<td class="isian-formulir"><textarea rows="2" cols="40" name="alamat" class="isian-formulir isian-formulir-border"><?php echo $r_tampil_user['alamat']; ?></textarea></td>
		</tr>
		<tr>
			<td class="label-formulir">Password</td>
			<td class="isian-formulir"><input type="password" name="password" id="myInput" value="<?php echo $r_tampil_user['pass']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="checkbox" onclick="ShowPass()"> Show Password</td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" class="tombol" id="tombol-simpan"></td>
	
		</tr>
	<script>
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