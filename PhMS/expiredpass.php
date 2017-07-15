<?php

session_start();

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
		
          <div class="box box-primary">
			<form class="phform" method="post" action="expired.php">
					  <label for="">Expire-Date:</label>
					  <select name="date" id="">
					  	<option value="">date</option>
					  	<option value="01">1</option>
					  	<option value="02">2</option>
					  	<option value="03">3</option>
					  	<option value="04">4</option>
					  	<option value="05">5</option>
					  	<option value="06">6</option>
					  	<option value="07">7</option>
					  	<option value="08">8</option>
					  	<option value="09">9</option>
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
					  </select>
					  <select name="month" id="">
					  	<option value="">month</option>
					  	<option value="01">jan</option>
					  	<option value="02">feb</option>
					  	<option value="03">march</option>
					  	<option value="04">apr</option>
					  	<option value="05">may</option>
					  	<option value="06">june</option>
					  	<option value="07">jul</option>
					  	<option value="08">aug</option>
					  	<option value="09">sep</option>
					  	<option value="10">oct</option>
					  	<option value="11">nov</option>
					  	<option value="12">dec</option>
					  </select>
					  <select name="year" id="">
					  	<option value="">year</option>
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
					  </select>
					  <button type="submit" class="btn btn-success">submit</button>
					  </form>
            <!-- /.box-body -->
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
