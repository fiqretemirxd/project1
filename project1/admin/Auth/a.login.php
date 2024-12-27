<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Admin Panel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" type="text/css" href="mystyle.css" media="screen" />
</head>
<body>
<header>
<div class="header">
	<h1>PPMS | Admin Login</h1>
</div>
</header>
<main>
<form action="a.login_action.php" method="post">
	<label for="adminEmail">Admin Email:</label>
	<input type="text" id="adminEmail" name="adminEmail" required><br><br>	
	<label for="adminPwd">Password:</label>
	<input type="password" id="adminPwd" name="adminPwd" required><br><br>
	<input type="submit" value="Login">
	<input type="reset" value="Reset"></br>	
</form>
</main>
<footer>
</footer>
</body>
</html>