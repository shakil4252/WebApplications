<?php

	session_start();
	
	
	$count_db=array();
	$product_nam= array();
	$product_piece= array();
	$product_set= array();
	$product_packet= array();
	$product_box= array();
	$product_price= array();
	$product_ttprc= array();
	$product_piecedb= array();
	$product_setdb= array();
	$product_packetdb= array();
	$product_boxdb= array();
	$product_id=array();
	
	 if(isset($_SESSION['nam'])){
		$product_nam=$_SESSION['nam'];
		$product_piece=$_SESSION['piece'];
		$product_set=$_SESSION['set'];
		$product_packet=$_SESSION['packet'];
		$product_box=$_SESSION['box'];
		$tprod=$_SESSION['xttprod'];
		$product_ttprc=$_SESSION['ttprc'];
		$sale_ttprc=$_SESSION['xttprc'];
		
		$count_db=$_SESSION['countdb'];	
		$product_piecedb=$_SESSION['piecedb'];
		$product_setdb=$_SESSION['setdb'];
		$product_packetdb=$_SESSION['packetdb'];
		$product_boxdb=$_SESSION['boxdb'];
		$product_id=$_SESSION['proid'];
		 
	 }
	 else{
		 $sale_ttprc=0;
		 $tprod="none";
	 }
	
	//
	$dsn = 'mysql:host=localhost;dbname=phms';
	$username = 'root';
	$password = '';
	$options = array(
		PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
	); 

	$conn = new PDO($dsn, $username, $password, $options);
	
	$customer_nam=$_POST["customer"];
	$customer_id=$_POST["customerid"];
	$cust_pay=$_POST["payment"];
	$cust_disc=$_POST["discount"];
	$mydate=date("d-m-y");
	
	if($cust_pay==""||$customer_nam==""||$customer_id==""||$cust_disc==""){
		header("location:slip.php");
	}
	else{
	$due=$sale_ttprc-$cust_pay;
	if($conn->query("INSERT INTO `sales` (`sale_no`, `sale_date`, `product_name`, `salesman_id`,
	`customer_id`, `sale_price`, `sale_payment`, `due`)
	VALUES (NULL, '$mydate', '$tprod', '22', $customer_id, $sale_ttprc , $cust_pay, $due)")){
		echo "sales ins <br>";
	}
	else{
		echo "sales not <br>";
	}
	$sch_row=$conn->query("SELECT * FROM `sales`");
	 $count=$sch_row->rowCount();
	$n=sizeof($product_id);
	echo "no_of_row expens:".$count."<br>size proid:".$n;
	for($i=0;$i<$n;$i++){
	if($conn->query("INSERT INTO `sale_product` (`sale_product_id`, `sale_no`, `product_id`, `piece`, `pset`, `packet`, `box`) 
	VALUES (NULL, $count, $product_id[$i], $product_piece[$i], $product_set[$i], $product_packet[$i], $product_box[$i])")){
		echo "sale_product ins <br>";
	}
	else{
		echo "sale_product not <br>";
	}
	}
	//product count update 
	//counting function
	
	function counting($pieceFMT,$setFMT,$packetFMT,$piece_,$set_,$packet_,$box_){
		$x=$box_*$packetFMT;
		$y=$x+$packet_;
		$m=$y*$setFMT;
		$n=$m+$set_;
		$o=$n*$pieceFMT;
		$z=$o+$piece_;
		
		return $z;
	}
	
	for($u=0;$u<sizeof($count_db);$u++){
			$pro_cnt=$conn->query("SELECT * FROM `product_count`
			WHERE `count_no`=$count_db[$u]");
			$pcrow=$pro_cnt->fetch(PDO::FETCH_ASSOC);
			$unprc=$pcrow["unitMRP"];
			$pieceFMT=$pcrow["fmt_piece"];
			$setFMT=$pcrow["fmt_set"];
			$packetFMT=$pcrow["fmt_packet"];
			
			echo $count_db[$u]."<br>st".$setFMT."<br>pk".$packetFMT;
			$prodcount_fun=counting($pieceFMT,$setFMT,$packetFMT,$product_piece[$u],$product_set[$u],$product_packet[$u],$product_box[$u]);
			$dbprodcount_fun=counting($pieceFMT,$setFMT,$packetFMT,$product_piecedb[$u],$product_setdb[$u],$product_packetdb[$u],$product_boxdb[$u]);
			$subt=$dbprodcount_fun-$prodcount_fun;
			
			$perbox=$pieceFMT*$setFMT*$packetFMT;
			$perpacket=$pieceFMT*$setFMT;
			$perset=$pieceFMT;
			
			$finalbox=floor($subt/$perbox);
			if($finalbox>0){
				$res1=$finalbox*$perbox;
				$subt=$subt-$res1;
			}
			else{
				$finalbox=0;
			}
			$finalpacket=floor($subt/$perpacket);
			if($finalpacket>0){
				$res2=$finalpacket*$perpacket;
				$subt=$subt-$res2;
			}
			else{
				$finalpacket=0;
			}
			$finalset=floor($subt/$perset);
			if($finalset>0){
				$res3=$finalset*$perset;
				$subt=$subt-$res3;
			}
			else{
				$finalset=0;
			}
			$finalpiece=$subt;
			// echo $finalpiece." ".$finalset." ".$finalpacket." ".$finalbox;
			// updating($count_db[$u],$finalpiece,$finalset,$finalpacket,$finalbox);
			
			$conn->query("UPDATE product_count
			SET `box`=$finalbox, `packet`=$finalpacket, `pset`=$finalset, `piece`=$finalpiece
			WHERE `count_no`=$count_db[$u]");
	}
	
	
	unset($_SESSION['nam']);
	unset($_SESSION['piece']);
	unset($_SESSION['set']);
	unset($_SESSION['packet']);
	unset($_SESSION['box']);
	unset($_SESSION['xttprod']);
	unset($_SESSION['ttprc']);
	unset($_SESSION['xttprc']);
	unset($_SESSION['countdb']);
	unset($_SESSION['piecedb']);
	unset($_SESSION['setdb']);
	unset($_SESSION['packetdb']);
	unset($_SESSION['boxdb']);
	unset($_SESSION['proid']);
	
	header("location:slip.php");
	}
	
	
	?>