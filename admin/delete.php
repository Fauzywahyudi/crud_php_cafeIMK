<?php
include "koneksi.php";
$id=$_GET['id'];

$delete = mysqli_query($link, "delete from daftar where id_member='$id'");
?>

<script language="JavaScript">
      alert('berhasil di hapus');
      document.location='index.php?page=editdata';
      </script>
<?php


?>