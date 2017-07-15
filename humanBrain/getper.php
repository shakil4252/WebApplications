<!DOCTYPE html>
<html lang="en">
<head>
		<link rel="stylesheet" href="animate.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="human_mind.css">
		<link rel="stylesheet" href="responsive.css">
	<meta charset="UTF-8">
	<title>getper</title>
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
					  <iframe src="https://embed-ssl.ted.com/talks/judy_macdonald_johnston_prepare_for_a_good_end_of_life.html" width="640" height="360" frameborder="0" scrolling="no" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
					</div>
				</div>
				<div class="col-md-3">
					<div class="embed-responsive embed-responsive-4by3">
					  <iframe src="https://embed-ssl.ted.com/talks/jennifer_golbeck_the_curly_fry_conundrum_why_social_media_likes_say_more_than_you_might_think.html" width="854" height="480" frameborder="0" scrolling="no" AllowFullScreen ></iframe>
					</div>
				</div>
				<div class="col-md-3">
					<div class="embed-responsive embed-responsive-4by3">
					  <iframe width="560" height="315" src="https://www.youtube.com/embed/wS0FPIpRPYo" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-md-3">
					<div class="embed-responsive embed-responsive-4by3">
						<iframe src="https://embed-ssl.ted.com/talks/martin_pistorius_how_my_mind_came_back_to_life_and_no_one_knew.html" width="854" height="480" frameborder="0" scrolling="no" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
					</div>
				</div>
			</div>
			<div class="row marge">
				<div class="col-md-3">
					<div class="embed-responsive embed-responsive-4by3">
					  <iframe src="https://embed-ssl.ted.com/talks/sebastian_seung.html" width="854" height="480" frameborder="0" scrolling="no" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
					</div>
				</div>
				<div class="col-md-3">
					<div class="embed-responsive embed-responsive-4by3">
					  <iframe src="https://embed-ssl.ted.com/talks/marvin_minsky_on_health_and_the_human_mind.html" width="854" height="480" frameborder="0" scrolling="no" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
					</div>
				</div>
				<div class="col-md-3">
					<div class="embed-responsive embed-responsive-4by3">
					  <iframe src="https://embed-ssl.ted.com/talks/philip_zimbardo_on_the_psychology_of_evil.html" width="854" height="480" frameborder="0" scrolling="no" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
					</div>
				</div>
				<div class="col-md-3">
					<div class="embed-responsive embed-responsive-4by3">
					  <iframe src="https://embed-ssl.ted.com/talks/steven_pinker_chalks_it_up_to_the_blank_slate.html" width="854" height="480" frameborder="0" scrolling="no" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
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