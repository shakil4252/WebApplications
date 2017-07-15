<!DOCTYPE html>
<html lang="en">
<head>
		<link rel="stylesheet" href="animate.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="human_mind.css">
		<link rel="stylesheet" href="responsive.css">
	<meta charset="UTF-8">
	<title>getcon</title>
</head>
<body>
<?php 
session_start();
if(!isset($_SESSION['sessionvalue'])){
	header("location:msglog.php");
}
$seefutureSession=$_SESSION['sessionvalue'];
 ?>
	<div class="formheaad">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<img src="images/brain_logo.png" alt="">
				</div>
				<div class="col-md-6 text-center">
					<h4>Human Mind Analytic System</h4>
				</div>
				<div class="col-md-3 text-center">
				<?php 
				if($seefutureSession){
					?>
					<a href="human_mind2.php">
						<button class="btn btn-primary">
							<span><i class="glyphicon glyphicon-home"></i></span>
						</button>
					</a><?php
				}
				else{
					?>
					<a href="index.html">
						<button class="btn btn-primary">
							<span><i class="glyphicon glyphicon-home"></i></span>
						</button>
					</a>
					<?php
				}
				?>
				</div>
			</div>
		</div>
	</div>
	<div class="mnbody">
		<div class="container back">
			<div class="row">
				<div class="col-md-3">
					<div class="embed-responsive embed-responsive-4by3">
					  <iframe width="560" height="315" src="https://www.youtube.com/embed/9LYrW9oi-cE" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-md-3">
					<div class="embed-responsive embed-responsive-4by3">
					  <iframe width="560" height="315" src="https://www.youtube.com/embed/aRsb24XY_T4" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-md-3">
					<div class="embed-responsive embed-responsive-4by3">
					  <iframe width="560" height="315" src="https://www.youtube.com/embed/20p5o6QaQfg" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-md-3">
					<div class="embed-responsive embed-responsive-4by3">
					  <iframe width="560" height="315" src="https://www.youtube.com/embed/WZmUMRAN-qc" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
			<div class="row hudai">
				<div class="col-md-3">
					<div class="embed-responsive embed-responsive-4by3">
					  <iframe width="560" height="315" src="https://www.youtube.com/embed/Ib6UB5_4vZg" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-md-3">
					<div class="embed-responsive embed-responsive-4by3">
					  <iframe width="560" height="315" src="https://www.youtube.com/embed/5zA5KfXXnl8" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-md-3">
					<div class="embed-responsive embed-responsive-4by3">
					  <iframe width="560" height="315" src="https://www.youtube.com/embed/TduT4-Z-uEQ" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-md-3">
					<div class="embed-responsive embed-responsive-4by3">
					  <iframe src="https://embed-ssl.ted.com/talks/david_kelley_how_to_build_your_creative_confidence.html" width="854" height="480" frameborder="0" scrolling="no" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row text-center loool">
			<div class="col-md-12">
				<a href="#"><button class="btn btn-primary">Load More</button></a>
			</div>
		</div>
	</div>
	<div class="lowerfoot">
		<div class="container">
			<div class="row">
				<div class="col-md-12"></div>
			</div>
		</div>
	</div>
	<script src="js/jquery-2.2.2.min"></script>
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>