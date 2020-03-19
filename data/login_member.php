
<?php 
include 'koneksi.php';
 
$id_member = $_POST['id_member'];
$password = $_POST['password'];
 
$query = mysqli_query($link,"select * from daftar where id_member='$id_member' and password='$password'");
$cek = mysqli_num_rows($query);

if($cek>0){
?>
<?php  session_start();
		    	$_SESSION["id_member"] = $id_member;
		        
                $_SESSION["password"] = $password;
?>

<script language="JavaScript">
      alert('Login Berhasil');
      document.location='member/index.php';
      </script>
	  
 <?php 
 
      
 } else {
 ?> 

<script language="JavaScript">
      alert('ID atau Password salah');
      document.location='index.php?page=login';
      </script>
<?php

}
?>