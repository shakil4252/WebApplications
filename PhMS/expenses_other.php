<?php
session_start();
	 //datbase connection		
	$product_nam= array();
	$product_price= array();
	
	 if(isset($_SESSION['nam_'])){
		$product_nam=$_SESSION['nam_'];
		$product_price=$_SESSION['price_'];
		$expense_ttprc=$_SESSION['xttprc'];
		$tprod=$_SESSION['xttprod'];
	 }
	 
	$dsn = 'mysql:host=localhost;dbname=phms';
	$username = 'root';
	$password = '';
	$options = array(
		PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
	); 

	$conn = new PDO($dsn, $username, $password, $options);
	
	$res=$conn->query("SELECT product_name FROM `product`");
	$outp = array();
	$outp = $res->fetchAll(PDO::FETCH_ASSOC);
	//database connection complete



          $logername=$_SESSION['logername'];
          $logerpass=$_SESSION['logerid'];
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PhMS</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/new.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="auto-complete.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Ph</b>MS</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Pharmacy</b>MS</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- 
          <!-- 
          <!-- 
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs"><?php echo $logername; ?> </span>
            </a>
            
          </li>
            <li></li>
          <li><a href="logout.php">logout</a></li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/american-express.png" class="img-circle" alt="User Image">
        </div>
      </div>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
             <i class="fa fa-users"></i> <span>Customer</span>
            <span class="pull-right-container">
            
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="slip.php"><i class="fa fa-circle-o"></i>Slip</a></li>
            <li><a href="customerpass.php"><i class="fa fa-circle-o"></i>Customer Info.</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
      <i class="fa fa-product-hunt" aria-hidden="true"></i>
            <span>Product</span>
            <span class="pull-right-container">
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="stock.php"><i class="fa fa-circle-o"></i>Show Stock</a></li>
            <li><a href="expiredpass.php"><i class="fa fa-circle-o"></i>Expired Product</a></li>
            <li><a href="Zero.php"><i class="fa fa-circle-o"></i>Zero Stock</a></li>
          </ul>
        </li>
        <li>
          <a href="pages/widgets.html">
      <i class="fa fa-usd" aria-hidden="true"></i>
      <span>Expenses</span>
            <span class="pull-right-container">
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="expenses_com.php"><i class="fa fa-circle-o"></i>Company Product</a></li>
            <li><a href="expenses_out.php"><i class="fa fa-circle-o"></i>Outer Product</a></li>
            <li><a href="expenses_other.php"><i class="fa fa-circle-o"></i>Other Expenses</a></li>
          </ul>
        </li>
        </li>
        <li class="treeview">
          <a href="#">
      <i class="fa fa-money" aria-hidden="true"></i>
            <span>Transiction</span>
            <span class="pull-right-container">
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="dailytranpass.php"><i class="fa fa-circle-o"></i>Daily</a></li>
            <li><a href="monthlytranpass.php"><i class="fa fa-circle-o"></i> Monthly</a></li>
            <li><a href="yearlytranpass.php"><i class="fa fa-circle-o"></i>Yearly</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
      <i class="fa fa-cart-plus" aria-hidden="true"></i>
      <span>Suppliers</span>
            <span class="pull-right-container">
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="supplier_com_pass.php"><i class="fa fa-circle-o"></i>Company</a></li>
            <li><a href="supplier_out_pass.php"><i class="fa fa-circle-o"></i>Outer</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
      <i class="fa fa-user" aria-hidden="true"></i>
            <span>HRMS</span>
            <span class="pull-right-container">
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="manager.php"><i class="fa fa-circle-o"></i>Manager</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Salesman</a></li>
          </ul>
        </li>
    <li>
          <a href="calendar.html">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
    </section>
  <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
		<div class="col-md-12 slipinput">
            <h3>Expense-other</h3>
			<h4>Payment:</h4>
			<form action="expenses_other_sub.php" method="post">
			<table class="table table-bordered">
				<tr>
					<td>
              <label for="">Payment:</label>
              <input type="text" name="payment"><br></td>
					<td>
              <label for="">Discount:</label>
              <input type="text" name="discount"><br></td>
				</tr>
				<tr>
					<td>
			<button type="submit" class="btn btn-success">submit</button></td>
				</tr>
			</table>
			</form>
            <form action="expenses_other_pan.php" method="post">
              <h4>Product selection:</h4>
              <table class="table table-border">
                <tr class="sliptr">
					<td>
					  <label for="">Product-Name:</label>
					  <input id="hero-demo2" name="product" type="text">
					</td>	
					<td>
					  <label for="">Product-price</label>
					  <input id="hero-demo" name="product_prc" type="text">
					</td>
                </tr>
				<tr>
					<td> 
						<button type="submit" class="btn btn-success" onclick="getval()">Add</button>
					</td>
				</tr>
              </table>
            </form>
			<table class="table table-bordered">
				<tr>
					<td>product</td>
					<td>price</td>
				</tr>
				<?php
				if(isset($_SESSION['nam_'])){
					// $_SESSION['valcnt']= array();
					// $_SESSION['valcnt']=$_SESSION['snproduct'];
					$x=count($_SESSION['nam_']);
					for($n=0;$n<$x;$n++){ ?>
				<tr>
					<td><?php echo $_SESSION['nam_'][$n];?></td>
					<td><?php echo $_SESSION['price_'][$n];?></td>
				</tr>
				<?php }?>
				<hr>
				<tr>
					<td>total:</td>
					<td><?php echo $expense_ttprc ?></td>
				</tr><?php } ?>
			</table>
			
          </div>
       
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy;  Shahjalal Shakil</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">

        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
    <script src="auto-complete.min.js"></script>
    <script>
		
        var demo1 = new autoComplete({
            selector: '#hero-demo2',
            minChars: 1,
            source: function(term, suggest){
                term = term.toLowerCase();
                var choices = <?php json_encode($outp); ?>;
                var suggestions = [];
                for (i=0;i<choices.length;i++)
                    if (~choices[i].toLowerCase().indexOf(term)) suggestions.push(choices[i]);
                suggest(suggestions);
            }
        });

	</script>
<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script src="awesomplete.js" async></script>
</body>
</html>
