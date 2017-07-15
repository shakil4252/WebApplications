<?php
	
	include_once("prod_class.php");
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
		 $tprod=$_SESSION['xttprod'];
		$prod_id=$_SESSION['proid'];
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
	$productID=$_POST["product_id"];
	$piece=$_POST["piece"];
	$set=$_POST["set"];
	$packet=$_POST["packet"];
	$box=$_POST["box"];
	$pieceFMT=$_POST["pieceFMT"];
	$setFMT=$_POST["setFMT"];
	$packetFMT=$_POST["packetFMT"];
	$price=$_POST["price"];
	$priceFMT=$_POST["priceFMT"];
	$mrp=$_POST["mrp"];
	$mrpFMT=$_POST["mrpFMT"];
	$xdate=$_POST["date"];
	$xmonth=$_POST["month"];
	$xyear=$_POST["year"];
	$expire=$xdate."-".$xmonth."-".$xyear;
	$prod_type=$_POST["product_type"];

	
	//FUNCTION  PRICE UNIT
	function UNITprice($price,$priceFMT,$pieceFMT,$setFMT,$packetFMT){
		if($priceFMT==1){
		return $price;}
		else if($priceFMT==2){
			$price=$price/$pieceFMT;
			return $price;}
		else if($priceFMT==3){
			$price=$price/$setFMT;
			$price=$price/$pieceFMT;
			return $price;}
		else if($priceFMT==4){
			$price=$price/$packetFMT;
			$price=$price/$setFMT;
			$price=$price/$pieceFMT;
			return $price;} }
			
	//FUNCTION MRP UNIT
	function UNITmrp($mrp,$mrpFMT,$pieceFMT,$setFMT,$packetFMT){
		if($mrpFMT==1){
		return $mrp;}
		else if($mrpFMT==2){
			$mrp=$mrp/$pieceFMT;
			return $mrp;}
		else if($mrpFMT==3){
			$mrp=$mrp/$setFMT;
			$mrp=$mrp/$pieceFMT;
			return $mrp;}
		else if($mrpFMT==4){
			$mrp=$mrp/$packetFMT;
			$mrp=$mrp/$setFMT;
			$mrp=$mrp/$pieceFMT;
			return $mrp;} }
	
	
	$unprc=UNITprice($price,$priceFMT,$pieceFMT,$setFMT,$packetFMT);
	
	$unmrp=UNITmrp($mrp,$mrpFMT,$pieceFMT,$setFMT,$packetFMT);
	
	//FUNCTION price
	function pricing($unprc,$pieceFMT,$setFMT,$packetFMT,$piece,$set,$packet,$box){
		$x=$box*$packetFMT;
		$y=$x+$packet;
		$m=$y*$setFMT;
		$n=$m+$set;
		$o=$n*$pieceFMT;
		$z=$o+$piece;
		
		$pricing=$z*$unprc;
		return $pricing;
	}
	
	$ttprc=pricing($unprc,$pieceFMT,$setFMT,$packetFMT,$piece,$set,$packet,$box);
	
	if($productID==""){	
	$rowproduct=$conn->query("select * from product where product_name='$product'");
	 $product_rowcount=$rowproduct->rowCount();
	
	 if($product_rowcount==0){
		 $prod_ins=$conn->query("INSERT INTO `product` (`product_id`, `product_name`, `product_type`)
		 VALUES (NULL, '$product', '$prod_type')");
		$idinput=$conn->query("select `product_id` from product where product_name='$product'");
		 $ID=$idinput->fetch(PDO::FETCH_ASSOC);
		 $productID=$ID["product_id"];
	 }
	 else{
		$idinput=$conn->query("select `product_id` from product where product_name='$product'");
		 $ID=$idinput->fetch(PDO::FETCH_ASSOC); 
		$productID=$ID["product_id"];
	 }
	}
	else{
		$rowproduct=$conn->query("select * from product where product_name='$product' and product_id='$productID'");
	 $product_rowcount=$rowproduct->rowCount();
	 if($product_rowcount==0){
		header("location:expenses_com.php");
	
	 }
	}
	$prod_count_ins=$conn->query("INSERT INTO `product_count` (`count_no`, `product_id`, `box`, `packet`, `pset`, `piece`, `fmt_packet`, 
	`fmt_set`, `fmt_piece`, `unit_price`, `unitMRP`,`expire_date`) 
	VALUES (NULL, $productID, $box, $packet, $set, $piece, $packetFMT, $setFMT, $pieceFMT, $unprc, $unmrp, '$expire')");
	
	$sch_proid=$conn->query("select product_id from product where product_name='$product'");
	 $pid=$sch_proid->fetch(PDO::FETCH_ASSOC); 
		$proID=$pid["product_id"];
	// $rowproduct_count=$conn->query("select * from product_count");
	
	// $count=$rowproduct_count->rowCount();
	
	
	//$product_obj= new product($product,$piece,$set,$packet,$box,$price);
	
	
	array_push($product_nam,$product);
	array_push($product_piece,$piece);
	array_push($product_set,$set);
	array_push($product_packet,$packet);
	array_push($product_box,$box);
	array_push($product_price,$price);
	array_push($product_ttprc,$ttprc);
	array_push($prod_id,$proID);
	//$n=sizeof($product_arr);
	$expense_ttprc=0;
	$sumsize=sizeof($product_ttprc);
	for($n=0;$n<$sumsize;$n++){
		$expense_ttprc=$expense_ttprc+$product_ttprc[$n];
	}
	
	// $tsize=sizeof($product_nam);
	// for($n=0;$n<$tsize;$n++){
		// $tprod.=$product_nam[$n].',';
		
	// }
	$tprod=implode(", ",$product_nam);
	
	//array_push($product_arr,$product_obj);
	//array_push($_SESSION['snproduct'],$product_obj);
	//$_SESSION['count']=$n;
	$_SESSION['nam_']=$product_nam;
	$_SESSION['piece_']=$product_piece;
	$_SESSION['set_']=$product_set;
	$_SESSION['packet_']=$product_packet;
	$_SESSION['box_']=$product_box;
	$_SESSION['price_']=$product_price;
	$_SESSION['ttprc']=$product_ttprc;
	$_SESSION['xttprc']=$expense_ttprc;
	$_SESSION['xttprod']=$tprod;
	$_SESSION['proid']=$prod_id;
	
	header("location:expenses_com.php");
	//echo $_SESSION['snproduct'][0]->price;
	
	
	//echo $n."<br>".$product_arr[0]->product."<br>".$piece_arr[0]->$piece."<br>".$set_arr[0]->$set."<br>".$packet_arr[0]->$packet."<br>".$box_arr[0]->$box."<br>".$price_arr[0]->price;
?>