<?php
// require 'koneksi.php';
// $sql = "SELECT * FROM tbl_item";
// $result = mysqli_query($conn, $sql);
include "koneksi.php";
$db_artstation = new database;
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery.css"></script>
	<title>Data Item</title>
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
        <h1>ART ITEM</h1>
        <button class="add" onclick="window.location.href='additem.php'">Add Item</button>
        <table cellpadding="0" cellspacing="0" border="0">
			<tr>
				<th>ID Item</th>
				<th>Item Name</th>
				<th>Category</th>
				<th>Brand</th>
				<th>Price</th>
			</tr>
			<?php
				foreach ($db_artstation->showitem() as $x ) {
			?>
			<tr>
				<td><?php echo $x ['id_item'];?></td>
				<td><?php echo $x ['name_item'];?></td>
				<td><?php echo $x ['category_item'];?></td>
				<td><?php echo $x ['brand_item'];?></td>
				<td><?php echo $x ['price'];?></td>
			</tr>
			<?php }?>
		</table>
		</div>
	</div>
</body>
</html>