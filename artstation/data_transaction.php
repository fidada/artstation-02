<?php
include "koneksi.php";
$db_artstation = new database;
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery.css"></script>
	<title>Data Transaction</title>
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
        <h1>TRANSACTION DATA</h1>
        <button class="add" onclick="window.location.href='addtransaction.php'">Add Transaction</button>
        <a href="forminsert_item.html"></a>
        <table cellpadding="0" cellspacing="0" border="0">
			<tr>
				<th>ID Transaction</th>
				<th>ID Item</th>
				<th>Name Item</th>
				<th>ID Customer</th>
				<th>Name Customer</th>
				<th>Quantity</th>
				<th>Price</th>
				<th>Total Payment</th>
			</tr>
			<?php
				foreach ($db_artstation->showtransaction() as $x ) {
			?>
			<tr>
				<td><?php echo $x ['id_transaction'];?></td>
				<td><?php echo $x ['id_item'];?></td>
				<td><?php echo $x ['name_item'];?></td>
				<td><?php echo $x ['id_customer'];?></td>
				<td><?php echo $x ['name_customer'];?></td>
				<td><?php echo $x ['quantity'];?></td>
				<td><?php echo $x ['price'];?></td>
				<td><?php echo $x ['total_payment'];?></td>
			</tr>
			<?php }?>
		</table>
		</div>
	</div>
</body>
</html>