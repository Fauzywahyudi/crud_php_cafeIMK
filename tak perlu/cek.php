<?php

session_start();

include"koneksi.php";

if(isset($_SESSION['id_member']))
{
	$query=mysqli_query($link,"select * from daftar where id_member='$_SESSION[id_member]' and password='");
	whlie($array=mysqli_fetch_array($query)){
	     if($array[level]==1 & ){
		     echo "<meta http-equiv=Refresh content=1;url=administrator/index.php>";
	}
	   else if($array[level]==2){
		  echo "<meta http-equiv=Refresh content=1;url=kasir/index.php>";
		}
		else if($array[level]==3){
		  echo "<meta http-equiv=Refresh content=1;url=stockis/index.php>";
		}
	
	}
}else {
echo "<meta http-equiv=Refresh content=1;url=../index.php>";
	exit;
	}
?>