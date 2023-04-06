<?php
include "koneksi.php";
$db_artstation = new database;
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery.css"></script>
	<title>Insert Data Customer</title>
</head>
<body>
	<div class="nav">
			<a href="index.php">Home</a>
			<a href="data_item.php">Item Data</a>
			<a href="data_customer.php">Customer Data</a>
			<a href="data_transaction.php">Transaction Data</a>
	</div>
    <div class="all">
    	<div class="box">
        	<h1>INSERT DATA CUSTOMER</h1>
			<form action="action.php?action=addcustomer" method="POST">
				<div class="pus">
					<label style="text-align: left;">Name: </label><br>
					<input type="text" name="name_customer">
				</div>
				<div class="pus">
					<label style="text-align: left;">Phone Number: </label> <br>
					<input type="number" name="phone">
				</div>
				<div class="pus">
					<label style="text-align: left;">Email Address: </label> <br>
					<input type="email" name="email">
				</div>
				<div class="pus">
					<label style="text-align: left;">Address: </label> <br>
					<input type="text" name="address">
				</div>
				<input type="submit" name="INSERT">
			</form>
		</div>
	</div>
</body>
</html>