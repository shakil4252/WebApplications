
<?php
//session_start();
// $count=$_SESSION['counter'];

// $entry=$_SESSION['getentry'];
// $entry++;
// $_SESSION['checkentry']=$entry;

//$host="localhost"; 
//$username="root"; 
//$password=""; 
//$db_name="human_mind"; 
$tbl_name="registration"; 
//
$dsn = 'mysql:host=localhost;dbname=human_mind';
$username = 'root';
$password = '';
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
); 

$conn = new PDO($dsn, $username, $password, $options);
//mysql_select_db("$db_name")or die("cannot select DB");
//mysql_connect("$host", "$username", "$password")or die("cannot connect"); 

//$conn = new mysqli($host, $username, $password, $db_name);

$username=$_POST["uname"];
$userpass=$_POST["upass"];
$usermob=$_POST["umob"];
$usermail=$_POST["umail"];
$userold=$_POST["old"];
$usercol=$_POST["ucol"];
//echo $usermob,$userold;
	// $cnt=0;
if($userold==""||$usercol==""||$username==""||$usermail==""||$userpass==""||
	$usermob==""){
//	$cnt++;
	header("location:reg.php");
	
}
else{

if ($conn->query("INSERT INTO registration (username,useremail,userpassword,usermo,old,color)
VALUES ('$username','$usermail','$userpass','$usermob','$userold','$usercol')")) {
	header("location:log.php");
} 
else {
    echo "Error: " ;
}
	//$_SESSION['check']=$count;

//$conn->close();
}



?>