<!DOCTYPE html>
<html lang="en">
<head>
		<link rel="stylesheet" href="animate.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="human_mind.css">
		<link rel="stylesheet" href="responsive.css">
	<meta charset="UTF-8">
	<title>seefuture</title>
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
				<h3 class="animated zoomInUp">wooo!!!</h3>
				<?php 
					$userold=$_POST["uold"];
					$usergender=$_POST["ugender"];
					$userhw=$_POST["uhw"];
					$userstudy=$_POST["ustudy"];
					$usercountry=$_POST["ucountry"];
					$userreligion=$_POST["urel"];
					if($userold==""||$usergender=""||$userhw==""||$userstudy=""||
						$usercountry==""||$userreligion==""){
						header("location:msgfuture.php");
					}
					// echo $usercountry"+"$usergender"+"$userreligion"+"$userstudy"+"$userhw"+"$userold;
					if($usergender=='male' && $userreligion=='muslim' && $userstudy=='engineer' && $usercountry!='sirian' && $userhw=='health' && $userold!='under eighteen'){
								?>
						<p>You are a damn lucky man.will be a great
						<?php 
						echo $userstudy;?>.You are now <?php echo $userold?> year. A lots of possiblities are waiting for you. You will be a great <?php echo $userstudy ?> in your life. Always conscious about <?php echo $userhw ?>
						Alaways keep faith of Allah. Success will come one day.You will live in <?php echo $usercountry ?> till 2020.
						 </p>
						<?php 
					}
					else if($usergender!='male' && $userreligion=='muslim' && $userstudy=='engineer' && $usercountry!='sirian' && $userhw=='health' && $userold!='under eighteen'){
								?>
						<p>You are a damn lucky lady.will be a great
						<?php 
						echo $userstudy;?>.You are now only <?php echo $userold?> year. A lots of possiblities are waiting for you. You will be a great <?php echo $userstudy ?> in your  Always conscious about <?php echo $userhw ?>life.
						Alaways keep faith of Allah. Success will come one day.You will live in <?php echo $usercountry ?> till 2020.
						 </p>
						<?php 
					}
					else if($usergender=='male' && $userreligion!='muslim' && $userstudy=='engineer' && $usercountry!='sirian' && $userhw=='health' && $userold!='under eighteen'){
								?>
						<p>You are a damn lucky man.will be a great
						<?php 
						echo $userstudy;?>.You are now only <?php echo $userold?> year. A lots of possiblities are waiting for. You will be a great <?php echo $userstudy ?> in your life. Always conscious about <?php echo $userhw ?>
						Alaways keep faith of GOD. Success will come one day.You will live in <?php echo $usercountry ?> till 2020.
						 </p>
						<?php 
					}
					else if($usergender!='male' && $userreligion!='muslim' && $userstudy=='engineer' && $usercountry!='sirian' && $userhw=='health' && $userold!='under eighteen'){
								?>
						<p>You are a damn lucky lady.will be a great
						<?php 
						echo $userstudy;?>.You are now only <?php echo $userold?> year. A lots of possiblities are waiting for. You will be a great <?php echo $userstudy ?> in your life. Always conscious about <?php echo $userhw ?>
						Alaways keep faith of GOD. Success will come one day.You will live in <?php echo $usercountry ?> till 2020.
						 </p>
						<?php 
					}
					else if($usergender=='male' && $userreligion=='muslim' && $userstudy!='engineer' && $usercountry!='sirian' && $userhw=='health' && $userold!='under eighteen'){
								?>
						<p>You are a damn lucky man.will be a great
						<?php 
						echo $userstudy;?>.You are now only <?php echo $userold?> year. A lots of possiblities are waiting for.  You will be a great <?php echo $userstudy ?> in your life. Always conscious about <?php echo $userhw ?>
						Alaways keep faith of Allah. Success will come one day.You will live in <?php echo $usercountry ?> till 2020.
						 </p>
						<?php 
					}
					else if($usergender!='male' && $userreligion=='muslim' && $userstudy!='engineer' && $usercountry!='sirian' && $userhw=='health' && $userold!='under eighteen'){
								?>
						<p>You are a damn lucky lady.will be a great
						<?php 
						echo $userstudy;?>.You are now only <?php echo $userold?> year. A lots of possiblities are waiting for. You will be a great <?php echo $userstudy ?> in your life. Always conscious about <?php echo $userhw ?>
						Alaways keep faith of Allah. Success will come one day.You will live in <?php echo $usercountry ?> till 2020.
						 </p>
						<?php 
					} 
					else if($userold=='under eighteen'){
						?> <p>you are only <?php echo $userold ?>. dont think more about future. do your job. time will say every thing.</p> <?php
					}
					else if($usercountry=='sirian'){
						?> <p>OH brother you are a <?php echo $usercountry ?>. Only Allah can save you. keep faith.</p> <?php
					}
					
					else{
						?> <p>Future always depends on your lot. its all about how much you satisfied about your life. I can say you , you have the power to gain what  you deserve. just keep faith of allah. take care.</p> <?php
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