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
	<form action="proses/user-edit-foto-proses.php" method="post" enctype="multipart/form-data">
	<table id="tabel-input">
		<tr>
			<td class="label-formulir">Foto</td>
			<td><input type="file" name="foto" placeholder="<?php echo $r_tampil_user['foto']; ?>"></td>
			<td><?php echo '<img src="'.$image.'" /><br />'; ?></td>
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