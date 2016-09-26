<!DOCTYPE html>
<html>
	<head>
		<link href="css/index.css" rel="stylesheet" type="text/css">
	</head>

	<body>
		<center>
		<form action="php/login.php" method="POST" style="margin-top:50px; padding:20px; border:solid black 1px; background:#363535; color:white;" class="form1">
			<h2>Login Sample</h2>
			<p>
			<label for="user_name">Username:</label>
			<input type="text" name="user_name">
			</p>
			
			<p>
			<label for="user_pw">Password:</label>
			<input type="password" name="user_pw">
			</p>

			<button type="submit">Login</button>
			<br>

			<a style="color:white;" href="register.php">Register</a>
		</form>
		</center>
	</body>
</html>