<?php

if($_POST['Submit']=="Submit"){
  $id_member =$_POST['id_member'];
  $nama_lengkap =$_POST['nama_lengkap'];
  $jenis_kelamin =$_POST['jenis_kelamin'];
  $email =$_POST['email'];
  $no_hp =$_POST['no_hp'];
  $umur =$_POST['umur'];
  $password =$_POST['password'];
  $password_ulang =$_POST['password_ulang'];

  if(empty($_POST['id_member'])||empty($_POST['nama_lengkap'])||empty($_POST['jenis_kelamin'])||empty($_POST['email'])||empty($_POST['no_hp'])||empty($_POST['no_hp'])||empty($_POST['password'])||empty($_POST['password_ulang'])){
    ?>
      <script language="JavaScript">
      alert('Data Harap Dilengkapi!');
      document.location='index.php';
      </script>

      <?php

}
else {
  include"koneksi.php";

$input =mysqli_query($link,"INSERT INTO daftar(id_member,nama_lengkap,jenis_kelamin,email,no_hp,password,password_ulang) VALUES ('$id_member','$nama_lengkap','$jenis_kelamin','$email','$no_hp','$password','$password_ulang')");

  ?>
      <script language="JavaScript">
      alert('Pendaftaran Member Berhasil');
      document.location='index.php';
      </script>
  <?php
  }
}

?>
