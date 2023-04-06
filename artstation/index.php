<?php
// require 'koneksi.php';
// $sql = "SELECT * FROM tbl_item";
// $result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery.css"></script>
	<title>Sea Blue Artstation</title>
</head>
<body>
	<div class="nav">
			<a href="index.php">Home</a>
			<a href="data_item.php">Item Data</a>
			<a href="data_customer.php">Customer Data</a>
			<a href="data_transaction.php">Transaction Data</a>
	</div>
	<div class="all">
		<div class="box" style="margin: 50px;">
		<h1>SEA BLUE ARTSTATION</h1>
		<p>Heaven Art Supply</p>
		</div>

		<?php 
			if(isset($_GET['page'])){
				$page = $_GET['page'];

				switch ($page) {
					case 'home':
        				include "index.php";
        				break;
      				case 'item':
        				include "data_item.php";
        				break;
      				case 'customer':
        				include "data_customer.php";
        				break;
      				case 'transaction':
        				include "data_transaction.php";
        				break;   
      				default:
       					echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
        				break;
    				}
  			}
   			?>
	</div>
</body>
</html>