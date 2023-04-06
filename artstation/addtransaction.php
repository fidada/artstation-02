<?php
include "koneksi.php";
$db_artstation = new database;
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery.css"></script>
	<title>Insert Data Transaction</title>
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
        	<h1>Insert Data Transaction</h1>
			<form action="action.php?action=addtransaction" method="POST">
				<div class="pus">
					<label style="text-align: left;">Item: </label> <br>
					<select name="id_item" id="name_item">
						<option disabled selected>Select Item ...</option>
						<?php foreach ($db_artstation->optionitem() as $option) { ?>
                        	<option value="<?=$option['id_item']?>">
                        		<?= $option['name_item'] . '' . " - Rp " . $option['price']?>
                        	</option>
                    	<?php } ?>
					</select>
				</div>
				<div class="pus">
					<label style="text-align: left;">Name Customer: </label> <br>
					<select name="id_customer" id="name_customer">
						<option disabled selected>Select Customer's Name ...</option>
						<?php foreach ($db_artstation->optioncustomer() as $option) { ?>
                        	<option value="<?=$option['id_customer']?>"><?php echo $option['name_customer'];?></option>
                    	<?php } ?>
					</select>
				</div>
				<div class="pus">
					<label style="text-align: left;">Quantity: </label> <br>
					<input type="number" name="quantity">
				</div>
				<!-- <div class="pus">
					<label style="text-align: left;">Item Price: </label> <br>
					<input type="number" name="price">
				</div> -->
				<!-- <div class="pus">
					<label style="text-align: left;">Total Payment: </label> <br>
					<input type="number" name="total_payment">
				</div> -->
				<input type="submit" name="INSERT">
			</form>
		</div>
	</div>
</body>
</html>