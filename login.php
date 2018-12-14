<?php
session_start();

// koneksi database -------------------------------------------->
$db = new mysqli ( "localhost" , "root" , "" , "dbpus" );
echo $db->connect_errno?'Koneksi gagal : '.$db->connect_error:'';
//<--------------------------------------------------------------

if(isset($_POST['username']) && ($_POST['password'])){
 $username = $db->real_escape_string($_POST['username']);
 $password = $db->real_escape_string($_POST['password']);
 $sql = "select * from tbuser where username = '$username' AND pass = '$password'";
 $result = $db->query($sql);

 if ($result->num_rows == 1){
  $row = $result->fetch_object();
  $_SESSION['username'] = $row->username;
  $_SESSION['level'] = $row->level;
  
header("location:home.php");
 }else{
  echo ("<script LANGUAGE='JavaScript'>
  window.alert('Username or password salah');
  window.location.href='index.php';
  </script>");
} 
 
}else{
 $_SESSION['pesan']="Username atau password tidak boleh kosong";
}


?>