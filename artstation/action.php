<?php
include 'koneksi.php';
$db_artstation = new database();

$action = $_GET['action'];

if ($action == "additem") {
	$db_artstation->additem($_POST['name_item'], $_POST['category_item'], $_POST['brand_item'], $_POST['price']);
	header("location:data_item.php");
}

if ($action == "addcustomer") {
	$db_artstation->addcustomer($_POST['name_customer'], $_POST['phone'], $_POST['email'], $_POST['address']);
	header("location:data_customer.php");
}

if ($action == "addtransaction") {

	$id_item = $_POST['id_item'];
	$row = $db_artstation->count($id_item);
	$price = $row['price'];
	$total_payment = $price * $_POST['quantity'];

	$db_artstation->addtransaction($_POST['id_item'], $_POST['id_customer'], $_POST['quantity'], $price, $total_payment);
	header("location:data_transaction.php");
}

?>