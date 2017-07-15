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
				
				
				$sql=$conn->query("INSERT INTO `salesman` (`salesman_name`, `salesman_id`, `salesman_contact`, `password`, `salesman_salary`, `salesman_payment`) VALUES ('$name', NULL, '$mail', '$pass',1111, 222);");
				if($sql->rowCount()>0){
				$_SESSION['salesmannam']=$name;
				$_SESSION['salemail']=$mail;
				$_SESSION['salepass']=$pass;
					header('location:salesman.php');
					
				}
			  ?>
