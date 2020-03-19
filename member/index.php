<!DOCTYPE html>
<html>
<head>
<?php require_once('cek.php'); ?>
	<title>Selamat Datang Di Website Cafe Jaman Now</title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- menghubungkan dengan file jquery -->
	<script type="text/javascript" src="jquery.js"></script>
	<style type="text/css" media="screen">
      table{font-family: Verdana, Arial, Helvetica, sans-serif,font-size:11px;}
      input{font-family: Verdana, Arial, Helvetica, sans-serif,font-size:11px;height: 20px}
      <!-- body{
        background-image: url(gambar/background_utama.jpg);
      }.style1 {color: #FF0000}
-->
    </style>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>
<body>
<div class="content">
	<header><?php 
	
	$session=$_SESSION['id_member'];
	
	 ?>
		<h1 class="judul"><marquee> <?php echo"SELAMAT DATANG  $session"; ?></marquee></h1>
		<h3 class="deskripsi style1"></h3>
		<h3 class="deskripsi style1"></h3>
	</header>
 
	<div class="menu">
		<ul>
			<li><a href="index.php?page=home"><b>HOME</b></a></li>
			<li><a href="index.php?page=edit"><b>EDIT DATA</b></a></li>
			<li><a href="index.php?page=tutorial"><b>TUTORIAL</b></a></li>
			<li><a href="index.php?page=forum"><b>FORUM</b></a></li> 
			<li><a href="index.php?page=tentang"><b>TENTANG</b></a></li>
			<li>=======></li>
			<li><a href="index.php?page=logout"><b>LOGOUT</b></a></li> 
			
			
			
		</ul>
	</div>
 
	<div class="badan">

 
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'home':
				include "halaman/home.php";
				break;
			case 'daftar':
				include "halaman/daftar.php";
				break;
			case 'login':
				include "formlogin.php";
				break;
			case 'tentang':
				include "halaman/tentang.php";
				break;
			case 'tutorial':
				include "halaman/tutorial.php";
				break;
			case 'forum':
				include "halaman/forum.php";
				break;	
			case 'admin':
				include "formloginadmin.php";
				break;		
			case 'editdata':
				include "edit.php";
				break;
			case 'edit':
				include "edit.php";
				break;
			case 'Tambah':
				include "tambah.php";
				break;
			case 'logout':
				include "logout.php";
				break;
			case 'profilmember':
				include "member/profil.php";
				break;
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "halaman/home.php";
	}
 
	 ?>
 
	</div>
</div>
</body>
<?php 
include "footer.php";
?>
</html>