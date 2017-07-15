<?php
session_start();	
	$product_nam= array();
	$product_price= array();
	 if(isset($_SESSION['nam_'])){
		$product_nam=$_SESSION['nam_'];
		$product_price=$_SESSION['price_'];
		$expense_ttprc=$_SESSION['xttprc'];
		$tprod=$_SESSION['xttprod'];
	 }
	 else{
		 $expense_ttprc=0;
		 $tprod="none";
	 }
	
	
	$dsn = 'mysql:host=localhost;dbname=phms';
	$username = 'root';
	$password = '';
	$options = array(
		PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
	); 

	$conn = new PDO($dsn, $username, $password, $options);
	
	$supplier_pay=$_POST["payment"];
	$supp_disc=$_POST["discount"];
	$mydate=date("d-m-y");
	
	if(isset($supplier_pay)){
	$due=$expense_ttprc-$supplier_pay;
	}
	
	if($supplier_pay==""||$supp_disc==""){
	echo "no value";
	header("location:expenses_other.php");
	}
	else{
	if($conn->query("INSERT INTO `expenses` (`expense_no`, `product_name`, `expense_type`, `supplier_id`,
	`salesman_id`, `expense_date`, `expense_amount`, `expense_payment`, `due`)
	VALUES (NULL, '$tprod', 'outer', '2' , '2', '$mydate', $expense_ttprc , $supplier_pay , $due)")){
		echo "expense inserted <br>";
	unset($_SESSION['nam_']);
	unset($_SESSION['price_']);
	unset($_SESSION['xttprc']);
	unset($_SESSION['xttprod']);
		
	header("location:expenses_other.php");
	}
	else{
		echo "expense error <br>";
	}
	
	}
	
	
	
	?>