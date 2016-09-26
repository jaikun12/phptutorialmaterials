<!DOCTYPE html>
<html>
	<head>
	</head>

	<body>
		<center>
		<form action="php/add_account.php" method="POST" style="margin-top:200px; padding:20px; border:solid black 1px; background:#363535; color:white;">
			<h2>Registration Sample</h2>
			<p>
			<label for="user_name">Username:</label>
			<input type="text" name="user_name">
			</p>
			
			<p>
			<label for="user_pw">Password:</label>
			<input type="password" name="user_pw">
			</p>

			<p>
			<label for="user_name">Nickname:</label>
			<input type="text" name="user_nick">
			</p>

			<button type="submit">Submit</button>
			<br>
		</form>
		</center>
	</body>
</html>