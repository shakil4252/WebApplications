<!DOCTYPE html>
<html lang="en">
<head>
		<link rel="stylesheet" href="animate.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="human_mind.css">
		<link rel="stylesheet" href="responsive.css">
	<meta charset="UTF-8">
</head>
<body>
<?php 
session_start();
$seefutureSession=$_SESSION['sessionvalue'];
 ?>
	<div class="formheaad">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<img src="images/brain_logo.png" alt="">
				</div>
	<title>seepersonality</title>
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
	<div class="container show">
		<div class="row">
			<div class="col-md-12 dhur">
				<h3 class="animated zoomInUp">You are...</h3>
				<?php  
					$userday=$_POST["day"];
					$userwalk=$_POST["walk"];
					$usertalk=$_POST["talk"];
					$usersit=$_POST["sitbody"];
					$userpleasure=$_POST["pleasure"];
					$userparty=$_POST["party"];
					$userknock=$_POST["knock"];
					$usercolor=$_POST["color"];
					$usersleep=$_POST["sleep"];
					$userdream=$_POST["dream"];
					if(	$userday==""||$userwalk==""||$usertalk==""||
						$usersit==""||$userpleasure==""||$userparty==""||
						$userknock==""||$usercolor==""||$usersleep==""||
						$userdream==""){
							header("location:msgpersonal.php");
					}
					$addsum=$userday+$userwalk+$usertalk+$usersit+$userpleasure+$userparty+$userknock+$usercolor+$usersleep+$userdream;
					if ($addsum>60) {
						?>
							<p>People think you are introvert and like to dominate.
							You will be appreciated but people dont trust you everytimes.
							People feel hesitate to be closer to you.</p>
						<?php
					}
					else if ($addsum>50) {
						?>
						<p>People know you as a attractive personality. You are animated,
						imotional,strong personality, leader, Forward-looking. You take quick decision whether it is right or wrong. You are Brave,
						adventures. People love your company.</p>
						<?php
					}
					else if ($addsum>40) {
						?>
							<p>You are fresh, realistic, life-oriented, a nice person.
							You are very kind, considerate. You love to help people.</p>
						<?php
					}
					else if ($addsum>30) {
						?>
							<p>You are inteligent, alert, careful, realistic, claver,
							Briliant and polite. People love to be your friend.
							You can believe someone easily, but if some one betray 
							you never trust him anymore.</p>
						<?php
					}
					else if ($addsum>20) {
						?>
							<p>You always irritate people and you are very much busy.
							People know you as Counsel. You are not talented but
							Enterprising.</p>
						<?php
					}
					else{
						?>
							<p>You are too much shy, nervous. You always feel hesitate to take decisions. somebody knows you only boring person.
							You are facing lots of problems in life.</p>
						<?php
					}

				?>
			</div>
		</div>
	</div>
	<div class="lowerfoot see">
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