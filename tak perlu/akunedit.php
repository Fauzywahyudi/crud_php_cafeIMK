<?php
	if ($_POST['ubahbiodata']){
	include "koneksi.php";
	mysqli_query($link, "update daftar set nama_lengkap='$_POST[nama_lengkap]',
	jenis_kelamin='$_POST[jenis_kelamin]',
	email='$_POST[email]',
	no_hp='$_POST[no_hp]' 
	where id_member='$_POST[id_member]'");
	
	header ("location:>p=akun");
	}

?>
<?php 
include "koneksi.php";
$sqluser = mysqli_query($link,"select * from daftar where id_member='$_POST[id_member]'");
$ruser = mysqli_fetch_array($sqluser);
?>

<div class="post">
<h2 class="tittle">Ubah Biodata Anggota </h2>
	<div class="entry">
	Silahkan ubah biodata keanggotaan anda
	<form name-"forml" method="post" action="" enctype="multipart/form-data">
		<table width="680" border="0" cellspacing="5" cellpadding="0">
		<tr> 
			<td width "30%" height="50%" align="center" bgcolor="#b7b7b7">Nama Lengkap 
			<input type="text" class="textbox" name="nama_lengkap" id="nama_lengkap" value="<?php echo "$ruser[nama_lengkap]";?>">
			</td>
		
		</tr>
		
		