<!DOCTYPE HTML>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<title>Login PHP</title>
	<link rel="stylesheet" href="style/style.css" />
	<link href='http://fonts.googleapis.com/css?family=Oleo+Script' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="style/jquery-1.7.min.js"></script>
	<script type="text/javascript"></script>
<!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><style type="text/css">body {
background:url(images/bg.jpg)
} -->
</style></head>
<?php // include 'cek.php'; ?>

	<div class="lg-container">
		<h1>LOGIN ADMIN</h1>
		<form action="login_admin.php" id="lg-form" name="lg-form" method="post"  >
			
			<div>
				<label for="username">ID ADMIN:</label>
				<input type="text" name="id_admin" id="id_admin" placeholder="id admin"/>
			</div>
			
			<div>
				<label for="password">Password:</label>
				<input type="password" name="password" id="password" placeholder="password" />
			</div>
			
			<div>				
				<button type="submit" id="login">Login</button>
			</div>
			
		</form>
		
		
	</div>
</body>
</html>