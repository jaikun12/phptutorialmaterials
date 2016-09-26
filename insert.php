<!DOCTYPE html>
<html>
	<head>
	</head>
	<?php 
		include('php/dbconnect.php');
		session_start();
		$userid = $_SESSION['username'];
	?>
	<body>
		<nav>
			<span style="float:left; margin-right:30px; margin-left:20px;">
			<a href="insert.php">Record Sale</a>
			</span>

			<span style="float:left; margin-right:30px; margin-left:20px;">
			<a href="sales.php">Sales</a>
			</span>

			<p>Hello, <?php echo $userid;?></p>

			<p><a href="php/logout.php">Logout</a>
		</nav>
		<br><br><br>
		<center>
			<form action="php/generate_sale.php" method="POST">
				<p>
				<label for="customer_name">Customer Name:</label>
				<input type="text" name="customer_name">
				</p>
				
				<p>
				<label for="sale_amt">Amount Sold:</label>
				<input type="text" name="sale_amt">
				</p>

				<button type="submit">Submit</button>
			</form>
		</center>
	</body>
</html>