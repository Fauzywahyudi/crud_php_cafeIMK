<?php
session_start(); // Memulai Session
$error=''; // Variabel untuk menyimpan pesan error
if (isset($_POST['submit'])) {
	if (empty($_POST['id_member']) || empty($_POST['password'])) {
			$error = "Username atau Password Salah";
	}
	else
	{
		// Variabel username dan password
		$id_member=$_POST['id_member'];
		$password=$_POST['password'];
		// Membangun koneksi ke database
		include 'koneksi.php';
		// Mencegah MySQL injection 
		$id_member = stripslashes($id_member);
		$password = stripslashes($password);
		$id_member = mysql_real_escape_string($id_member);
		$password = mysql_real_escape_string($password);
		// Seleksi Database
		$db = mysql_select_db("db_cafeonline", $link);
		// SQL query untuk memeriksa apakah karyawan terdapat di database?
		$query = mysqli_query("select * from daftar where password='$password' AND id_member='$id_member'", $link);
		$rows = mysqli_num_rows($query);
			if ($rows == 1) {
				$_SESSION['login_member']=$id_member; // Membuat Sesi/session
				header("location: input_data.php"); // Mengarahkan ke halaman profil
				} else {
				$error = "Id Member atau Password belum terdaftar";
				}
				mysql_close($link); // Menutup koneksi
	}
}
?>