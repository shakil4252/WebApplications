<?php
	
	include_once("prod_class.php");
	session_start();
	
	$count_db=array();
	$product_nam= array();
	$product_piece= array();
	$product_set= array();
	$product_packet= array();
	$product_box= array();
	$product_piecedb= array();
	$product_setdb= array();
	$product_packetdb= array();
	$product_boxdb= array();
	$product_price= array();
	$product_ttprc= array();
	$product_id=array();
	
	 if(isset($_SESSION['nam'])){
		$product_nam=$_SESSION['nam'];
		$product_piece=$_SESSION['piece'];
		$product_set=$_SESSION['set'];
		$product_packet=$_SESSION['packet'];
		$product_box=$_SESSION['box'];
		$tprod=$_SESSION['xttprod'];
		$product_ttprc=$_SESSION['ttprc'];
		$product_id=$_SESSION['proid'];
		$count_db=$_SESSION['countdb'];	
		$product_piecedb=$_SESSION['piecedb'];
		$product_setdb=$_SESSION['setdb'];
		$product_packetdb=$_SESSION['packetdb'];
		$product_boxdb=$_SESSION['boxdb'];
		 
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
	$piece=$_POST["piece"];
	$set=$_POST["set"];
	$packet=$_POST["packet"];
	$box=$_POST["box"];
	
	//$product_obj= new product($product,$piece,$set,$packet,$box,$price);
	
	//FUNCTION price
	function pricing($unprc,$pieceFMT,$setFMT,$packetFMT,$piece_,$set_,$packet_,$box_){
		$x=$box_*$packetFMT;
		$y=$x+$packet_;
		$m=$y*$setFMT;
		$n=$m+$set_;
		$o=$n*$pieceFMT;
		$z=$o+$piece_;
		
		$pricing=$z*$unprc;
		return $pricing;
	}
	function counting($pieceFMT,$setFMT,$packetFMT,$piece_,$set_,$packet_,$box_){
		$x=$box_*$packetFMT;
		$y=$x+$packet_;
		$m=$y*$setFMT;
		$n=$m+$set_;
		$o=$n*$pieceFMT;
		$z=$o+$piece_;
		
		return $z;
	}
	
	$sch_proid=$conn->query("select product_id from product where product_name='$product'");
	 $pid=$sch_proid->fetch(PDO::FETCH_ASSOC); 
		$proID=$pid["product_id"];
		$chk=0;
	if(sizeof($product_id)>0){	
		for($p=0;$p<sizeof($product_id);$p++){
			if($product_id[$p]==$proID){
				$chk=1;
			}
		}
		}
		if($chk==1){
			header("location:slip.php");
		}
		else{
	$exp_cnt=$conn->query("SELECT expire_date FROM `product_count` WHERE product_id=$proID ");
	$exp_arr=array();
	while($find_date=$exp_cnt->fetch(PDO::FETCH_ASSOC)){
		array_push($exp_arr,$find_date["expire_date"]);
		}
		$count_=0;
		for($j=0;$j<sizeof($exp_arr);$j++){
			$pro_cnt=$conn->query("SELECT * FROM `product_count`
			WHERE `product_id`=$proID and `expire_date`='$exp_arr[$j]'");
			$pcrow=$pro_cnt->fetch(PDO::FETCH_ASSOC);
			$unprc=$pcrow["unitMRP"];
			$pieceFMT=$pcrow["fmt_piece"];
			$setFMT=$pcrow["fmt_set"];
			$packetFMT=$pcrow["fmt_packet"];
			$piece_d=$pcrow["piece"];
			$set_d=$pcrow["pset"];
			$packet_d=$pcrow["packet"];
			$box_d=$pcrow["box"];
			$count_d=$pcrow["count_no"];
			
			$have_prod=counting($pieceFMT,$setFMT,$packetFMT,$piece_d,$set_d,$packet_d,$box_d);
			$need_prod=counting($pieceFMT,$setFMT,$packetFMT,$piece,$set,$packet,$box);
			$subtracted_prod=$have_prod-$need_prod;
			if($have_prod>=$need_prod){
				$ttprc=pricing($unprc,$pieceFMT,$setFMT,$packetFMT,$piece,$set,$packet,$box);
				$count_=$count_d;
			$piece_=$piece_d;
			$set_=$set_d;
			$packet_=$packet_d;
			$box_=$box_d;
			
			}
		}
		if($count_==0){
			header("location:slip.php");
		}
		else{
			
	echo $ttprc;
	array_push($product_nam,$product);
	array_push($product_piece,$piece);
	array_push($product_set,$set);
	array_push($product_packet,$packet);
	array_push($product_box,$box);
	array_push($product_piecedb,$piece_);
	array_push($product_setdb,$set_);
	array_push($product_packetdb,$packet_);
	array_push($product_boxdb,$box_);
	array_push($count_db,$count_);
	array_push($product_ttprc,$ttprc);
	//$n=sizeof($product_arr);
		array_push($product_id,$proID);
		$_SESSION['proid']=$product_id;
	
	$sumsize=sizeof($product_ttprc);
	for($n=0;$n<$sumsize;$n++){
		$sale_ttprc=$sale_ttprc+$product_ttprc[$n];
	}
	// echo "<br>".$sale_ttprc;
	// $tsize=sizeof($product_nam);
	// for($n=0;$n<$tsize;$n++){
		// $tprod.=$product_nam[$n].',';
	// }
	
	$tprod=implode(", ",$product_nam);
	//array_push($product_arr,$product_obj);
	//array_push($_SESSION['snproduct'],$product_obj);
	//$_SESSION['count']=$n;
	$_SESSION['nam']=$product_nam;
	$_SESSION['piece']=$product_piece;
	$_SESSION['set']=$product_set;
	$_SESSION['packet']=$product_packet;
	$_SESSION['box']=$product_box;
	$_SESSION['xttprod']=$tprod;
	$_SESSION['ttprc']=$product_ttprc;
	$_SESSION['xttprc']=$sale_ttprc;
	
		$_SESSION['countdb']=$count_db;	
		$_SESSION['piecedb']=$product_piecedb;
		$_SESSION['setdb']=$product_setdb;
		$_SESSION['packetdb']=$product_packetdb;
		$_SESSION['boxdb']=$product_boxdb;
		
	header("location:slip.php");
	//echo $_SESSION['snproduct'][0]->price;
		}
		}
	//echo $n."<br>".$product_arr[0]->product."<br>".$piece_arr[0]->$piece."<br>".$set_arr[0]->$set."<br>".$packet_arr[0]->$packet."<br>".$box_arr[0]->$box."<br>".$price_arr[0]->price;
?>