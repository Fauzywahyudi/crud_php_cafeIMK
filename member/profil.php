
<!DOCTYPE html>
<html>
	<head>
	<?php 
	session_start();
	$session=$_SESSION['id_member']; ?>
	  <title>Login Berhasil</title>
	  <link href="style.css" rel="stylesheet" type="text/css">
	</head>
<body>
<?php echo"selamat datang $session"; ?>
	<div id="profile">
	  <b id="welcome">Selamat Datang : <i></i></b>
	  <b id="logout"><a href="logout.php">Log Out</a></b>
	</div>
</body>
</html>