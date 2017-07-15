<?php
	include_once("prod_class.php");	
	session_start();
	
	$count_db=array();
	$product_nam= array();
	$product_piece= array();
	$product_set= array();
	$product_packet= array();
	$product_box= array();
	$product_price= array();
	$product_ttprc= array();
	$product_piecedb= array();
	$product_setdb= array();
	$product_packetdb= array();
	$product_boxdb= array();
	$product_id=array();
	
	 if(isset($_SESSION['nam'])){
		$product_nam=$_SESSION['nam'];
		$product_piece=$_SESSION['piece'];
		$product_set=$_SESSION['set'];
		$product_packet=$_SESSION['packet'];
		$product_box=$_SESSION['box'];
		$tprod=$_SESSION['xttprod'];
		$product_ttprc=$_SESSION['ttprc'];
		$sale_ttprc=$_SESSION['xttprc'];
		
		$count_db=$_SESSION['countdb'];	
		$product_piecedb=$_SESSION['piecedb'];
		$product_setdb=$_SESSION['setdb'];
		$product_packetdb=$_SESSION['packetdb'];
		$product_boxdb=$_SESSION['boxdb'];
		$product_id=$_SESSION['proid'];
		 
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
            <h3>Customer Slip</h3>
			<h4>Payment:</h4>
			<form action="slip_sub.php" method="post">
			<table class="table table-bordered">
				<tr>
					<td>
              <label for="">Customer name:</label>
              <input type="text" name="customer"></td>
					<td>
              <label for="">Customer ID:</label>
              <input type="text" name="customerid"></td>
				</tr>
				<tr>
					<td>
              <label for="">Payment:</label>
              <input class="slippay" type="text" name="payment"><br></td>
					<td>
              <label for="">Discount:</label>
              <input class="slipdis" type="text" name="discount"><br></td>
				</tr>
				<tr>
					<td>
			<button type="submit" class="btn btn-success">submit</button></td>
				</tr>
			</table>
			</form>
            <form action="slippan.php" method="post">
              <h4>Product selection:</h4>
              <table class="table table-bordered">
                <tr class="sliptr">
					<td>
					  <label class="slipnamq" for="">Product-Name:</label>
					  <input id="hero-demo" name="product" type="text">
					</td>
					<td>
				  <label class="slipnamq" for="">Quantity:</label>
				  <select name="piece" id="piece">
				  	<option value="0">piece</option>
				  	<option value="1">1</option>
				  	<option value="2">2</option>
				  	<option value="3">3</option>
				  	<option value="4">4</option>
				  	<option value="5">5</option>
				  	<option value="6">6</option>
				  	<option value="7">7</option>
				  	<option value="8">8</option>
				  	<option value="9">9</option>
				  	<option value="10">10</option>
				  	<option value="11">11</option>
				  	<option value="12">12</option>
				  	<option value="13">13</option>
				  	<option value="14">14</option>
				  	<option value="15">15</option>
				  	<option value="16">16</option>
				  	<option value="17">17</option>
				  	<option value="18">18</option>
				  	<option value="19">19</option>
				  	<option value="20">20</option>
				  	<option value="21">21</option>
				  	<option value="22">22</option>
				  	<option value="23">23</option>
				  	<option value="24">24</option>
				  	<option value="25">25</option>
				  	<option value="26">26</option>
				  	<option value="27">27</option>
				  	<option value="28">28</option>
				  	<option value="29">29</option>
				  	<option value="30">30</option>
				  	<option value="31">31</option>
				  	<option value="32">32</option>
				  	<option value="33">33</option>
				  	<option value="34">34</option>
				  	<option value="35">35</option>
				  	<option value="36">36</option>
				  	<option value="37">37</option>
				  	<option value="38">38</option>
				  	<option value="39">39</option>
				  	<option value="40">40</option>
				  	<option value="41">41</option>
				  	<option value="42">42</option>
				  	<option value="43">43</option>
				  	<option value="44">44</option>
				  	<option value="45">45</option>
				  	<option value="46">46</option>
				  	<option value="47">47</option>
				  	<option value="48">48</option>
				  	<option value="49">49</option>
				  </select>
				  <select name="set" id="set">
				  	<option value="0">  set </option>
				  	<option value="1">1</option>
				  	<option value="2">2</option>
				  	<option value="3">3</option>
				  	<option value="4">4</option>
				  	<option value="5">5</option>
				  	<option value="6">6</option>
				  	<option value="7">7</option>
				  	<option value="8">8</option>
				  	<option value="9">9</option>
				  	<option value="10">10</option>
				  	<option value="11">11</option>
				  	<option value="12">12</option>
				  </select>
				  <select name="packet" id="packet">
				  	<option value="0">packet</option>
				  	<option value="1">1</option>
				  	<option value="2">2</option>
				  	<option value="3">3</option>
				  	<option value="4">4</option>
				  	<option value="5">5</option>
				  	<option value="6">6</option>
				  	<option value="7">7</option>
				  	<option value="8">8</option>
				  	<option value="9">9</option>
				  	<option value="10">10</option>
				  	<option value="11">11</option>
				  	<option value="12">12</option>
				  	<option value="13">13</option>
				  	<option value="14">14</option>
				  	<option value="15">15</option>
				  	<option value="16">16</option>
				  	<option value="17">17</option>
				  	<option value="18">18</option>
				  	<option value="19">19</option>
				  	<option value="20">20</option>
				  	<option value="21">21</option>
				  	<option value="22">22</option>
				  	<option value="23">23</option>
				  	<option value="24">24</option>
				  	<option value="25">25</option>
				  	<option value="26">26</option>
				  	<option value="27">27</option>
				  	<option value="28">28</option>
				  	<option value="29">29</option>
				  </select>
				  <select  name="box" id="box">
				  	<option value="0">  box </option>
				  	<option value="1">1</option>
				  	<option value="2">2</option>
				  	<option value="3">3</option>
				  	<option value="4">4</option>
				  	<option value="5">5</option>
				  	<option value="6">6</option>
				  	<option value="7">7</option>
				  	<option value="8">8</option>
				  	<option value="9">9</option>
				  	<option value="10">10</option>
				  	<option value="10">11</option>
				  	<option value="11">12</option>
				  </select><br>
                </tr>
				<tr class="sliptr">
					<td> 
						<button type="submit" class="btn btn-success" onclick="getval()">Add</button>
					</td>
				</tr>
              </table>
            </form>
			<?php
			$product_arr= array();
			$x=0;
			//$n=0;
			//$_SESSION['snproduct'];
			//$n=$_SESSION['count'];
			
			
			?>
			<h4>Slip:</h4>
			<table class="table table-bordered rowBorder ">
				<tr>
					<td>product</td>
					<td>quantity<br>	
					(box; packet; set; piece)</td>
					<td>price</td>
				</tr>
				<?php
				if(isset($_SESSION['nam'])){
					// $_SESSION['valcnt']= array();
					// $_SESSION['valcnt']=$_SESSION['snproduct'];
					$x=count($_SESSION['nam']);
					for($n=0;$n<$x;$n++){ ?>
				<tr>
					<td><?php echo $_SESSION['nam'][$n];?></td> 
					<td><?php echo $_SESSION['box'][$n].";  ".$_SESSION['packet'][$n].";  ".$_SESSION['set'][$n].";  ".$_SESSION['piece'][$n];?></td>
					<td><?php echo $_SESSION['ttprc'][$n];?></td>
				</tr>
				<?php }?>
				<hr>
				<br>
				<tr>
					<td>total:</td>
					<td></td>
					<td><?php echo $sale_ttprc ?></td>
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
            selector: 'hero-demo',
            minChars: 1,
            source: function(term, suggest){
                term = term.toLowerCase();
                var choices = <?php json_encode($outp) ?>;
                var suggestions = [];
                for (i=0;i<choices.length;i++){
                    if (~choices[i].toLowerCase().indexOf(term)) suggestions.push(choices[i]){
					 suggest(suggestions);
                    }
                }
            }
        });

	</script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
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
</body>
</html>
