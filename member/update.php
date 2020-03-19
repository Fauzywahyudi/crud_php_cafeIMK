
<?php 
 
include 'koneksi.php';
$id_member = $_POST['id_member'];
$nama_lengkap = $_POST['nama_lengkap'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
 
mysqli_query($link,"UPDATE daftar SET nama_lengkap='$nama_lengkap',jenis_kelamin='$jenis_kelamin',email='$email', no_hp='$no_hp' WHERE id_member='$id_member'"); ?>
 
 <script language="JavaScript">
      alert('Data Berhasil Di Ubah');
      document.location='index.php?page=editdata';
      </script> <?php
?>