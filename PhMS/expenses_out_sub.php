<?php
session_start();	
	$product_nam= array();
	$product_piece= array();
	$product_set= array();
	$product_packet= array();
	$product_box= array();
	$product_pieceFMT= array();
	$product_setFMT= array();
	$product_packetFMT= array();
	$product_price= array();
	$product_ttprc= array();
	$prod_id=array();
	 if(isset($_SESSION['nam_'])){
		$product_nam=$_SESSION['nam_'];
		$product_piece=$_SESSION['piece_'];
		$product_set=$_SESSION['set_'];
		$product_packet=$_SESSION['packet_'];
		$product_box=$_SESSION['box_'];
		$product_price=$_SESSION['price_'];
		$product_ttprc=$_SESSION['ttprc'];
		$expense_ttprc=$_SESSION['xttprc'];
		$tprod=$_SESSION['xttprod'];
		$prod_id=$_SESSION['proid'];
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
	
	$supplier_nam=$_POST["supplier"];
	$supplier_id=$_POST["supplierid"];
	$supplier_pay=$_POST["payment"];
	$supp_disc=$_POST["discount"];
	$mydate=date("d-m-y");
	
	if(isset($supplier_pay)){
	$due=$expense_ttprc-$supplier_pay;
	}
	
	if($supplier_nam==""||$supplier_id==""||$supplier_pay==""||$supp_disc==""){
	echo "no value";
	header("location:expenses_out.php");
	}
	else{
	if($conn->query("INSERT INTO `expenses` (`expense_no`, `product_name`, `expense_type`, `supplier_id`,
	`salesman_id`, `expense_date`, `expense_amount`, `expense_payment`, `due`)
	VALUES (NULL, '$tprod', 'outer', $supplier_id , '2', '$mydate', $expense_ttprc , $supplier_pay , $due)")){
	$sch_row=$conn->query("SELECT * FROM `expenses`");
	 $count=$sch_row->rowCount();
	$n=sizeof($prod_id);
	echo "no_of_row expens:".$count."<br>size proid:".$n;
	for($i=0;$i<$n;$i++){
	$conn->query("INSERT INTO `expense_product` (`expense_product_id`, `expense_no`,
	`product_id`, `piece`, `pset`, `packet`, `box`)
	VALUES (NULL, $count, $prod_id[$i], $product_piece[$i], $product_set[$i], $product_packet[$i], $product_box[$i])");
	}
		echo "expense inserted <br>";
	unset($_SESSION['nam_']);
	unset($_SESSION['piece_']);
	unset($_SESSION['set_']);
	unset($_SESSION['packet_']);
	unset($_SESSION['box_']);
	unset($_SESSION['price_']);
	unset($_SESSION['ttprc']);
	unset($_SESSION['xttprc']);
	unset($_SESSION['xttprod']);
	unset($_SESSION['proid']);
		
	header("location:expenses_out.php");
	}
	else{
		echo "expense error <br>";
	}
	
	}
	
	
	
	?>