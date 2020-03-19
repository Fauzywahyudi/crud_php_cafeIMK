
<?php 
include 'koneksi.php';
 
$id_admin = $_POST['id_admin'];
$password = $_POST['password'];
 
$query = mysqli_query($link,"select * from tbl_admin where id_admin='$id_admin' and password='$password'");
$cek = mysqli_num_rows($query);

if($cek>0){
?>
<?php  session_start();
		    	$_SESSION["id_admin"] = $id_admin;
		        
                $_SESSION["password"] = $password;
?>

<script language="JavaScript">
      alert('Login Berhasil');
      document.location='admin/index.php';
      </script>
 <?php 
 
      
 } else {
 ?> 
<script language="JavaScript">
      alert('Id Member atau Password Salah');
      document.location='index.php?page=admin';
      </script>
<?php

}

?>