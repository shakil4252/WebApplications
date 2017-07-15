<?php 
session_start();
unset($_SESSION['sessionvalue']);
// if($test){
// 	echo "logout successfull";
// }
header("location:index.html");
 ?>