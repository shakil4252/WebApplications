<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="animate.css">
	<link rel="stylesheet" href="human_mind.css">
	<link rel="stylesheet" href="responsive.css">
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
		<?php 
		session_start();
		$sessionVar=isset($_SESSION['sessionvalue']);
		if(!$sessionVar){
			header("location:log.php");
		}
		$my=$_SESSION['sessionvalue'];
		?>
	<div class="hspace">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					
						<div class="logcon">
							<img src="images/brain_logo.png" alt="">
						</div>
						<div class="reg">
						<?php
						if($sessionVar){
							 ?>
							<a><p><?php echo strtoupper($my); ?></p></a>
							<a href="logout.php"><p>Log Out</p></a> <?php
							
						}
							else{ 
								?>
							<a href="reg.php"><p>Registration</p></a>
							<a href="log.php"><p>Log In</p></a>
							<?php
							}	
							 ?>

						</div>
				</div>
			</div>
		</div>
	</div>

	<div class="banner">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-7 bannerleft">
					<div class="header">
						<img src="images/brainF.png">
					</div>
					<div class="himg">
						<p><i>Power of Brain</i></p>
						<h3 class="animated fadeInDownBig">Human Mind Analytic System</h3>
					</div>
				</div>
				<div class="col-md-5 bannerright">
					<div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
						<div class="carousel-inner">
							<div class="item active img1">
								<img src="images/psycokj1.png" alt="">
								<div class="side text-center carousel-caption">
									<h4><i>What is mind?</i></h4>
									<p>The part or facultyof a person by which one feels. perceives,thinks,
									remembers,desires and imagines</p>
									<a href="#"><button class="btn btn-primary">read more</button></a>
								</div>
							</div>
							<div class="item img2">
								<img src="images/psyco2.jpg" alt="">
								 <div class="side text-center carousel-caption">
									<h4><i>Who is the controlar of mind?</i></h4>
									<p>The mind is like small child, who accepts, and takes for granted, whatever it sees or hears, without judgment and without considering the consequences.</p>
									<a href="#"><button class="btn">read more</button></a>
								</div>
							</div>
						</div>
						<a class="carousel-control left" href="#myCarousel" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
						</a>
						<a class="carousel-control right" href="#myCarousel" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right"></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="navbar">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					
				<div class="hmenu">
						<ul>
							<li class="and">
							  <a class="btn" href="refresh.php">
									    Get Refresh
							  </a>
							</li>
							<li class="and">
							  <a class="btn" href="getper.php">
									    Get Personality
							  </a>
							</li>
							<li class="and">
							  <a class="btn" href="getcon.php">
									    Get Confidence
							   </a>
							</li>
							<li class="and">
							  <a class="btn" href="motivation.php">
									    Get Motivation
							  </a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="body">
		<div class="container">
			<div class="row back-fixed">
				<div class="col-md-6 discon">
					<a href="future.php">
						<div class="lbody text-center animated pulse">
							<span class="icon"><i class="glyphicon glyphicon-king"></i></span>
							<p>See Your Future</p>
						</div>
					</a>
				</div>
				<div class="col-md-6 discon">
					<a href="personal.php">
						<div class="lbody text-center animated pulse">
							<span class="icon"><i class="glyphicon glyphicon-user"></i></span>
							<p>See Your Personality</p>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="chest">
		<div class="container-fluid">
			<div class="row text-center padcon">
				<div class="col-md-2">
					<h3>Watch video</h3>
				</div>
				<div class="col-md-2">
					<a href="#"><img src="images/tube.jpeg" alt=""></a>
				</div>
				<div class="col-md-2">
					<h3>Read journal</h3>
				</div>
				<div class="col-md-2">
					<a href="#"><img src="images/journal2.jpg" alt=""></a>
				</div>
				<div class="col-md-2">
					<h3>Share thoughts</h3>
				</div>
				<div class="col-md-2">
					<a href="#"><img src="images/ted.png" alt=""></a>
				</div>
			</div>
		</div>
	</div>
	<div class="space">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					
				</div>
			</div>
		</div>
	</div>


	<div class="footer">
		<div class="container">
			<div class="row text-center foot">
				<div class="col-md-6 miss">
					<div class="mission fmarg">
						<h4>ISD Mission & Philosophy</h4>
						<p>To make people smile. To give a new life new birth.
						If a picture can smile you, you will be happy.</p>
					</div>
					<div class="cright fmarg">
						<p>&copy;Copyright ISD Bangladesh</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="contact fmarg">
						<h4>Contact Us</h4>
						<address>
							51/A/10 West razabazar Dhaka
							Email:shakil4252@gmail.com
							Phone:01724600621
							facebook.com/shakil
						</address>
					</div>
					<div class="links fmarg">
						<a href="#"><img src="images/lin1.png" alt=""></a>
						<a href="#"><img src="images/lin2.png" alt=""></a>
						<a href="#"><img src="images/lin3.png" alt=""></a>
						<a href="#"><img src="images/lin4.png" alt=""></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="js/jquery-2.2.2.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>