
<?php
session_start();
//$host="localhost"; 
//$username="root"; 
//$password=""; 
//$db_name="human_mind"; 
$tbl_name="registration"; 

//mysql_select_db("$db_name")or die("cannot select DB");
//mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
$dsn = 'mysql:host=localhost;dbname=human_mind';
$username = 'root';
$password = '';
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
); 

$conn = new PDO($dsn, $username, $password, $options);

//
//$conn = new mysqli($host, $username, $password, $db_name);

 $myusername=$_POST["username"]; 
$mypassword=$_POST["userpass"]; 

$a=strlen($myusername);
$b=strlen($mypassword);

$myUser=strip_tags($myusername);

$myUserpass = strip_tags($mypassword);

$c=strlen($myUser);
$d=strlen($myUserpass);

if ($a==$c && $b==$d) {
 
$sql=$conn->query("SELECT * FROM $tbl_name WHERE username='$myusername' and userpassword='$mypassword'");

$count=$sql->rowCount();

if($count==1){
	$_SESSION['sessionvalue']=$myusername;
	
	header("location:human_mind2.php");

}
else {
header("location:log.php");
}	
}
else{
	echo "ARE YOU A HAKKER??<br>".$myUser."<br>".$myUserpass;
}
?>