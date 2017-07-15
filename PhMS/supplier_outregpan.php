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
				
				
				$sql=$conn->query("INSERT INTO `supplier` (`suplier_name`, `supplier_id`, `suplier_type`, `supplier_contact`, `password`, `supplier_payment`) VALUES ('$name', NULL, 'out', '$mail', '$pass', 00)");
				if($sql->rowCount()>0){
				$_SESSION['suppliernam_']=$name;
				$_SESSION['suppliermail_']=$mail;
				$_SESSION['supplierpass_']=$pass;
					header('location:supplier_out.php');
					
				}
			  ?>
