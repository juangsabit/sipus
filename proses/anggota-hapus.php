<html>
	<body>

	<?php
	include '../koneksi.php';
	$id_anggota=$_GET['id'];

	$del = $con->query(
		"DELETE FROM tbanggota
		WHERE idanggota='$id_anggota'"
		);

	?>
		<script type="text/JavaScript" language="JavaScript">
	 window.location.href='/sipus/home.php?p=anggota';
		</script>
	
	</body>
</html>

	