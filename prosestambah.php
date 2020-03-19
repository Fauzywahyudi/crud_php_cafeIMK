<?php 
include "koneksi.php";
$id_member=$_POST['id_member'];
$nama_lengkap=$_POST['nama_lengkap'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$email=$_POST['email'];
$no_hp=$_POST['no_hp'];
$password1=$_POST['password'];


mysqli_query($link,"INSERT INTO daftar(id_member,nama_lengkap,jenis_kelamin,email,no_hp,password,password_ulang) VALUES ('$id_member','$nama_lengkap','$jenis_kelamin','$email','$no_hp','$password1','$password1')");
echo "<meta http-equiv=Refresh content=1;url=index.php?page=editdata>";


?>