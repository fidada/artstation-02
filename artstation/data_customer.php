<?php
// require 'koneksi.php';
// $sql = "SELECT * FROM tbl_customer";
// $result = mysqli_query($conn, $sql);
include "koneksi.php";
$db_artstation = new database;
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery.css"></script>
	<title>Data Customer</title>
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
        <h1>CUSTOMER'S DATA</h1>
        <button class="add" onclick="window.location.href='addcustomer.php'">Add Customer</button>
        <table cellpadding="0" cellspacing="0" border="0">
			<tr>
				<th>ID Customer</th>
				<th>Customer's Name</th>
				<th>Phone</th>
				<th>Email</th>
				<th>Address</th>
			</tr>
			<?php
				foreach ($db_artstation->showcustomer() as $x ) {
			?>
			<tr>
				<td><?php echo $x ['id_customer'];?></td>
				<td><?php echo $x ['name_customer'];?></td>
				<td><?php echo $x ['phone'];?></td>
				<td><?php echo $x ['email'];?></td>
				<td><?php echo $x ['address'];?></td>
			</tr>
			<?php }?>
		</table>
		</div>
	</div>
</body>
</html>