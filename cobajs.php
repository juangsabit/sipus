<strong>PENCARIAN:</strong><br>
<form action="<?$_SERVER['PHP_SELF']?>" method="post" name="pencarian" id="pencarian">
  <input type="text" name="cari" id="cari">
  <input type="submit" name="submit" id="submit" value="CARI">
</form>

<?php
// konfigurasi
$db_host = "localhost";  // nama host
$db_user = "root";  // username mysql
$db_pass = ""; //password isi sesuai seting server Anda.
$db_name = "coba";  // karena nama database yang kita buat adalah pencarian

// koneksi ke database
$link = mysqli_pconnect ($db_host, $db_user, $db_pass) or die ("Ga bisa connect");
mysqli_select_db ($db_name) or die ("Ga bisa select database");

// menampilkan data

if ((isset($_POST['submit'])) AND ($_POST['cari'] <> "")) {
  $cari = $_POST['cari'];
  $sql = mysqli_query("SELECT * FROM siswa WHERE nama LIKE '%$cari%' ") or die(mysql_error());
  //menampilkan jumlah hasil pencarian
  $jumlah = mysqli_num_rows($sql); 
  if ($jumlah > 0) {
    echo '<p>Ada '.$jumlah.' data yang sesuai.</p>';
   
        while ($res=mysqli_fetch_array($sql)) {
        $nomor++; echo $nomor.'. ';
        echo $res[nama].'<br>';
      }
  }
  else {
   // menampilkan pesan zero data
    echo 'Maaf, hasil pencarian tidak ditemukan.';
  }
} 
else { echo 'Masukkan dulu kata kuncinya';}
?>