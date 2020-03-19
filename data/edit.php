<html>
<head>

	<title>Edit Data</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1>Edit Data Member </h1>
		
	</div>
	
	<br/>
	
	
 
	<br/>
	<h3>Edit data</h3>
 
	<?php 
	include "koneksi.php";
	$id_member = $_GET['id'];
	$query_mysql = mysqli_query($link,"SELECT * FROM daftar WHERE id_member='$id_member'")or die(mysql_error());
	$nomor = 1;
	while($data = mysqli_fetch_assoc($query_mysql)){
	?>
	<form action="update.php" method="post">		
		<table>
			<tr height="46">
				<td><b>Nama Lengkap</b></td>
				<td></td>
				<td>
					<input type="hidden" readonly="" name="id_member" value="<?php echo $data['id_member'] ?>">
					<input type="text" name="nama_lengkap" value="<?php echo $data['nama_lengkap'] ?>">
				</td>					
			</tr>	
			<tr height="46">
				<td><b>Jenis Kelamin </b></td>
				<td></td>
        			<td><SELECT NAME="jenis_kelamin">
            		<option value="-">Jenis Kelamin-
            		<option value="Laki-laki">Laki-laki
            		<option value="Perempuan">Perempuan
            		</SELECT></td>				
			</tr>	
			<tr height="46">
				<td><b>Email</b></td>
				<td></td>
				<td><input type="text" name="email" value="<?php echo $data['email'] ?>"></td>					
			</tr>	
			<tr height="46">
				<td><b>NO HP</b></td>
				<td></td>
				<td><input type="text" name="no_hp" value="<?php echo $data['no_hp'] ?>"></td>					
			</tr>	
			<tr height="46">
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
</body>
</html>