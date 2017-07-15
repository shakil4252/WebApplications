<!DOCTYPE html>
<html lang="en">
<head>
		<link rel="stylesheet" href="animate.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="human_mind.css">
		<link rel="stylesheet" href="responsive.css">
	<meta charset="UTF-8">
	<title>motivation</title>
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
					  <iframe src="https://embed-ssl.ted.com/talks/rita_pierson_every_kid_needs_a_champion.html" width="854" height="480" frameborder="0" scrolling="no" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
					</div>
				</div>
				<div class="col-md-3">
					<div class="embed-responsive embed-responsive-4by3">
					  <iframe src="https://embed-ssl.ted.com/talks/roselinde_torres_what_it_takes_to_be_a_great_leader.html" width="854" height="480" frameborder="0" scrolling="no" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
					</div>
				</div>
				<div class="col-md-3">
					<div class="embed-responsive embed-responsive-4by3">
					  <iframe src="https://embed-ssl.ted.com/talks/alan_siegel_let_s_simplify_legal_jargon.html" width="854" height="480" frameborder="0" scrolling="no" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
					</div>
				</div>
				<div class="col-md-3">
					<div class="embed-responsive embed-responsive-4by3">
					  <iframe src="https://embed-ssl.ted.com/talks/stella_young_i_m_not_your_inspiration_thank_you_very_much.html" width="854" height="480" frameborder="0" scrolling="no" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
					</div>
				</div>
			</div>
			<div class="row hudai">
				<div class="col-md-3">
					<div class="embed-responsive embed-responsive-4by3">
					  <iframe src="https://embed-ssl.ted.com/talks/drew_dudley_everyday_leadership.html" width="640" height="360" frameborder="0" scrolling="no" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
					</div>
				</div>
				<div class="col-md-3">
					<div class="embed-responsive embed-responsive-4by3">
						<iframe src="https://embed-ssl.ted.com/talks/dan_pink_on_motivation.html" width="854" height="480" frameborder="0" scrolling="no" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
					</div>
				</div>
				<div class="col-md-3">
					<div class="embed-responsive embed-responsive-4by3">
					  <iframe src="https://embed-ssl.ted.com/talks/sarah_lewis_embrace_the_near_win.html" width="854" height="480" frameborder="0" scrolling="no" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
					</div>
				</div>
				<div class="col-md-3">
					<div class="embed-responsive embed-responsive-4by3">
					  <iframe src="https://embed-ssl.ted.com/talks/rory_sutherland_sweat_the_small_stuff.html" width="854" height="480" frameborder="0" scrolling="no" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
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