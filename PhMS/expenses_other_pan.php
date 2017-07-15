<?php
	
	include_once("prod_class.php");
	session_start();
	
	$product_nam= array();
	$product_price= array();
	
	 if(isset($_SESSION['nam_'])){
		$product_nam=$_SESSION['nam_'];
		$product_price=$_SESSION['price_'];
		 $tprod=$_SESSION['xttprod'];
	 }
	 //datbase connection
	$dsn = 'mysql:host=localhost;dbname=phms';
	$username = 'root';
	$password = '';
	$options = array(
		PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
	); 

	$conn = new PDO($dsn, $username, $password, $options);
	//database connection complete
	
	$product=$_POST["product"];
	$product_prc=$_POST["product_prc"];


	// $rowproduct_count=$conn->query("select * from product_count");
	
	// $count=$rowproduct_count->rowCount();
	
	
	//$product_obj= new product($product,$piece,$set,$packet,$box,$price);
	
	
	array_push($product_nam,$product);
	array_push($product_price,$product_prc);
	//$n=sizeof($product_arr);
	$expense_ttprc=0;
	$sumsize=sizeof($product_price);
	for($n=0;$n<$sumsize;$n++){
		$expense_ttprc=$expense_ttprc+$product_price[$n];
	}
	
	$tprod=implode(", ",$product_nam);
	
	$_SESSION['nam_']=$product_nam;
	$_SESSION['price_']=$product_price;
	$_SESSION['xttprc']=$expense_ttprc;
	$_SESSION['xttprod']=$tprod;
	
	header("location:expenses_other.php");
	//echo $_SESSION['snproduct'][0]->price;
	
	
	//echo $n."<br>".$product_arr[0]->product."<br>".$piece_arr[0]->$piece."<br>".$set_arr[0]->$set."<br>".$packet_arr[0]->$packet."<br>".$box_arr[0]->$box."<br>".$price_arr[0]->price;
?>