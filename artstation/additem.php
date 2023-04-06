<?php
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
        	<h1>ADD ITEM</h1>
			<form action="action.php?action=additem" method="POST">
				<div class="pus">
					<label style="text-align: left;">Name: </label><br>
					<input type="text" name="name_item">
				</div>
				<div class="pus">
					<label style="text-align: left;">Category: </label> <br>
					<select name="category_item" id="category_item">
						<option disabled selected>Select Category Item ...</option>
						<?php foreach ($db_artstation->optioncategory() as $option) { ?>
                        	<option value="<?=$option['category_item']?>"><?php echo $option['category_item'];?></option>
                    	<?php } ?>
					</select>
				</div>
				<div class="pus">
					<label style="text-align: left;">Brand: </label> <br>
					<select name="brand_item" id="brand_item">
						<option disabled selected>Select Brand Item ...</option>
						<?php foreach ($db_artstation->optionbrand() as $option) { ?>
                        	<option value="<?=$option['brand_item']?>"><?php echo $option['brand_item'];?></option>
                    	<?php } ?>
					</select>
				</div>
				<div class="pus">
					<label style="text-align: left;">Price: </label> <br>
					<input type="number" name="price">
				</div>
				<input type="submit" name="INSERT">
			</form>
		</div>
	</div>
</body>
</html>