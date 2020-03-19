
<!DOCTYPE html>
<html>
	<head>
	<?php 
	session_start();
	$session=$_SESSION['id_admin']; ?>
	  <title>Login Berhasil</title>
	  <link href="style.css" rel="stylesheet" type="text/css">
	</head>
<body>
<?php echo"selamat datang $session"; ?>
	<div id="profile">
	  <p><b id="welcome">Selamat Datang : <i></i></b>
	      <b id="logout"><a href="logout.php">	Log Out</a></b>      </p>
	  <p><a href="../datamember.php">data member   </p>
	</div>
	
	
</body>
</html>