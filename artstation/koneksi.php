<?php 
	class database{
		var $host = 'localhost';
		var $name = 'root';
		var $pw = '';
		var $db = 'db_artstation';

		function _construct(){
			$koneksi = mysqli_connect($this->host,$this->name,$this->pw,$this->db);
			mysqli_select_db($koneksi, $this->db);
		}

		// Koneksi item
		function showitem(){
			$koneksi = mysqli_connect($this->host,$this->name,$this->pw,$this->db);
			$data = mysqli_query($koneksi, "SELECT * FROM tbl_item");
			while ($d = mysqli_fetch_array($data)) {
				$hasil[] = $d;
			}
			return $hasil;
		}

		// Koneksi Customer
		function showcustomer(){
			$koneksi = mysqli_connect($this->host,$this->name,$this->pw,$this->db);
			$data = mysqli_query($koneksi, "SELECT * FROM tbl_customer");
			while ($d = mysqli_fetch_array($data)) {
				$hasil[] = $d;
			}
			return $hasil;
		}

		// koneksi trnsksi
		function showtransaction(){
			$koneksi = mysqli_connect($this->host,$this->name,$this->pw,$this->db);
			$data = mysqli_query($koneksi, "SELECT tbl_transaction.id_transaction, tbl_transaction.quantity, tbl_transaction.price, tbl_transaction.total_payment, tbl_item.id_item, tbl_item.name_item, tbl_customer.id_customer, tbl_customer.name_customer
				FROM tbl_customer INNER JOIN tbl_transaction on tbl_customer.id_customer = tbl_transaction.id_customer INNER JOIN tbl_item ON tbl_item.id_item = tbl_transaction.id_item ORDER by id_transaction");
			$hasil = [];
			while ($d = mysqli_fetch_array($data)) {
				$hasil[] = $d;
			}
			return $hasil;
		}

		//tambah item
		function additem($name_item,$category_item,$brand_item,$price){
			$koneksi = mysqli_connect($this->host, $this->name, $this->pw, $this->db);
			mysqli_query($koneksi, "INSERT INTO tbl_item VALUES(null,'$name_item', '$category_item', '$brand_item', '$price')");
		}

		//tambah customer
		function addcustomer($name_customer,$phone,$email,$address){
			$koneksi = mysqli_connect($this->host, $this->name, $this->pw, $this->db);
			mysqli_query($koneksi, "INSERT INTO tbl_customer VALUES(null,'$name_customer', '$phone', '$email', '$address')");
		}

		//tambah transaksi
		function addtransaction($id_item,$id_customer,$quantity,$price,$total_payment){
			$koneksi = mysqli_connect($this->host, $this->name, $this->pw, $this->db);
			mysqli_query($koneksi, "INSERT INTO tbl_transaction VALUES(null,'$id_item', '$id_customer', '$quantity', '$price', '$total_payment')");
		}

		//option
		function optioncategory(){  
        $koneksi = mysqli_connect($this->host, $this->name,$this->pw,$this->db);
        $result_category = mysqli_query($koneksi, "SELECT id_item, category_item FROM tbl_item");
        $hasil = [];
        while($d = mysqli_fetch_array($result_category, MYSQLI_ASSOC)){
            $hasil[] = $d;
        }
        return $hasil;
    	}

    	function optionbrand(){
        $koneksi = mysqli_connect($this->host, $this->name,$this->pw,$this->db);
        $result_brand = mysqli_query($koneksi, "SELECT id_item, brand_item FROM tbl_item");
        $hasil = [];
        while($d = mysqli_fetch_array($result_brand, MYSQLI_ASSOC)){
            $hasil[] = $d;
        }
        return $hasil;
    	}

		function optionitem(){
			$koneksi = mysqli_connect($this->host, $this->name,$this->pw,$this->db);
			$result_item = mysqli_query($koneksi, "SELECT id_item, name_item, price FROM tbl_item");
			$hasil = [];
			while($d = mysqli_fetch_array($result_item, MYSQLI_ASSOC)){
				$hasil[] = $d;
			}
			return $hasil;
		}

		function optioncustomer(){
			$koneksi = mysqli_connect($this->host, $this->name,$this->pw,$this->db);
			$result_customer = mysqli_query($koneksi, "SELECT id_customer, name_customer FROM tbl_customer");
			$hasil = [];
			while($d = mysqli_fetch_array($result_customer, MYSQLI_ASSOC)){
				$hasil[] = $d;
			}
			return $hasil;
		}

		function count($id_item){
			$koneksi = mysqli_connect($this->host, $this->name,$this->pw,$this->db);
			$result_count = mysqli_query($koneksi, "SELECT price FROM tbl_item WHERE id_item = '$id_item'");
			$row = mysqli_fetch_array($result_count);
			return $row;
		}
		
	}
?>