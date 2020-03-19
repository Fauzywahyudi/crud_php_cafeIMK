<!DOCTYPE html>
<html>
<head>
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
      }.style1 {
	color: #FF0000;
	font-weight: bold;
	font-family: "Courier New", Courier, monospace;
}
-->
    </style>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>
<body>
<div class="content">
  <header>
	  <h1 class="judul">
	    <marquee> 
		<span class="style1">Selamat Datang di CAFE JAMAN NOW &#8482</span>
                                                        </marquee></h1> 
	</header>
 
	<div class="menu">
		<ul>
			<li><a href="index.php?page=home"><b>HOME</b></a></li>
			<li><a href="index.php?page=daftar"><b>DAFTAR</b></a></li>
			<li><a href="index.php?page=login"><b>LOGIN</b></a></li>
			<li><a href="index.php?page=admin"><b>ADMIN</b></a></li>
			<li><a href="index.php?page=tutorial"><b>TUTORIAL</b></a></li>
			<li><a href="index.php?page=forum"><b>FORUM</b></a></li> 
			<li><a href="index.php?page=tentang"><b>TENTANG</b></a></li>
			<li><a href="index.php?page=event"><b>EVENT</b></a></li>
			
			
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
				include "datamember.php";
				break;
			case 'edit':
				include "edit.php";
				break;
			case 'Tambah':
				include "tambah.php";
				break;
				case 'event':
				include "event.php";
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