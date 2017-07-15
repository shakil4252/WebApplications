 <?php
 
				session_start();
				$dsn = 'mysql:host=localhost;dbname=phms';
				$username = 'root';
				$password = '';
				$options = array(
					PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
				); 

				$conn = new PDO($dsn, $username, $password, $options); 
				
				$name=$_POST["nam"];
				$mail=$_POST["mail"];
				$pass=$_POST["pass"];
				$pass2=$_POST["pass2"];
				
				
				$sql=$conn->query("INSERT INTO `customer` (`customer_name`, `customer_id`, `customer_mail`, `customer_pass`)
				VALUES ('$name', NULL, '$mail', '$pass')");
				if($sql->rowCount()>0){
				$_SESSION['custnam']=$name;
				$_SESSION['custmail']=$mail;
				$_SESSION['custpass']=$pass;
					header('location:customer.php');
					
				}
			  ?>
