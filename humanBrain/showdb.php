<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css.css">
</head>


<body style="background:#ADE1A6">
<?php

//$conn= new mysqli("localhost","root","","human_mind");
$dsn = 'mysql:host=localhost;dbname=human_mind';
$username = 'root';
$password = '';
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
); 

$conn = new PDO($dsn, $username, $password, $options);

//
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//} 
$sql = $conn->query("SELECT * FROM registration");
//$result = $conn->query($sql);
if ($sql->rowCount() > 0) {
    ?>
    
    <table width="800" border="2" bgcolor="#cccccc" align="center"><td align="center" >
            <div align="center">User List</div><br/>
             <tr>
                <th>userID</th>
                <th>username</th> 
                <th>useremail</th>
                <th>userpassword</th>
                <th>usermo</th>
                <th>old</th>
                <th>color</th>
            </tr>
    <?php
    while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
        ?>
        <tr>
        <td>
            <?php echo $row["userID"]   ?>        
        </td>
        <td>
            <?php echo $row["username"]   ?>    
        </td> 
        <td>
            <?php echo $row["useremail"]   ?>
        </td> 
        <td>
            <?php echo $row["userpassword"]   ?>
        </td> 
        <td>
            <?php echo $row["usermo"]   ?>
        </td> 
        <td>
            <?php echo $row["old"]   ?>
        </td> 
        <td>
            <?php echo $row["color"]   ?>
        </td>
      </tr>
        
    <?php
    }
}
 else {
    echo "0 results";
}
?>
        
</body>
</html>


