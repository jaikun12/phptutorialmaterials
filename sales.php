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
			<table style="width:100%;">
				<thead>
					<th>Sales ID</th>
					<th>Customer</th>
					<th>Amount</th>
				</thead>
				<tbody style="text-align:center;">
					<?php
						$query = mysql_query("SELECT * from sales_table WHERE;");
						while($result = mysql_fetch_array($query)){
							$id = $result['sales_id'];
							$customer = $result['customer'];
							$amount = $result['amount'] * 10;
							echo ' <tr>
										<td>'.$id.'</td>
										<td>'.$customer.'</td>
										<td>'.$amount.'</td>
									</tr>';
						}

						?>
				</tbody>
		</center>
	</body>
</html>