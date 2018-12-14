<?php
include'../koneksi.php';
$id_user=$_GET['id'];

$con->query(
	"DELETE FROM tbuser
	WHERE iduser='$id_user'"
);
header("location:../home.php?p=user");
?>