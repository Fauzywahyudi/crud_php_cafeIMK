<?php

session_start();

include"koneksi.php";

if(!isset($_SESSION['id_admin']))
{
	echo "<meta http-equiv=Refresh content=1;url=../index.php>";
	exit;
}
?>