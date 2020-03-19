<?php
include "koneksi.php";

$data=mysqli_query($link,"select * From tbl_daftar");

?>
<p>Data Member Cafe Jaman Now</p>
<p><a href="index.php?page=Tambah"> Tambah data </a> </p>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
      <tr>
        <td>ID Member </td>
        <td>Nama Lengkap </td>
        <td>Jenis Kelamin </td>
        <td>Alamat Email </td>
        <td>NoHp</td>
		<td>Password</td>
		<td>Opsi</td>
      </tr>
      <?php
while($sql = mysqli_fetch_assoc($data)){

		$id_member=$sql['id_member'];
		$nama_lengkap=$sql['nama_lengkap'];
		$jenis_kelamin=$sql['jenis_kelamin'];
		$email=$sql['email'];
		$no_hp=$sql['no_hp'];
		$password=$sql['password'];
		
		?>
      <tr>
        <td><?php echo "$id_member"; ?></td>
        <td><?php echo "$nama_lengkap"; ?></td>
        <td><?php echo "$jenis_kelamin"; ?></td>
        <td><?php echo "$email"; ?></td>
        <td><?php echo "$no_hp"; ?></td>
        <td><?php echo "$password"; ?></td>
		<td><?php  echo "<a href='?page=edit&id=$id_member'>Edit</a>";   ?> | <a href="delete.php?id=<?php echo"$id_member"?>">Delete</a> </td>
		
  </tr>
	
      
      <?php	  
	  }
	?>
</table>
