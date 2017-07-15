<?php 
session_start();
unset($_SESSION['logername']);
unset($_SESSION['logerid']);
unset($_SESSION['salesmannam']);
unset($_SESSION['salepass']);
// if($test){
// 	echo "logout successfull";
// }
header("location:index.html");
 ?>