<!DOCTYPE html>
<html lang="en">
<head>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="human_mind.css">
		<link rel="stylesheet" href="responsive.css">
	<meta charset="UTF-8">
	<title>future</title>
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
	<div class="formbody">
		<div class="container">
			<div class="row">
				<div class="col-md-6 leftp left">
					<img src="images/brainF.png" alt="">
					<p>When you see that your mind is supporting you.
					Surely can do something stuning you didn't do ever</p>	
				</div>
				<div class="col-md-6 right">
					<form action="seefuture.php" method="post" class="">
						<div class="form-group">
							<label for="" class="control-label">How old are you?</label><br>
							<input type="radio" name="uold" value="under eighteen">18-
							<input type="radio" name="uold" value="eighteen">18
							<input type="radio" name="uold" value="eighteen plus">18+
						</div>
						<div class="form-group lol">
							<label for="" class="control-label">What is your gender?</label><br>
							<input type="radio" name="ugender" value="male">Male
							<input type="radio" name="ugender" value="female">Female
						</div>
						<div class="form-group lol">
							<label for="" class="control-label">Study backgroud?</label><br>
							<input type="radio" name="ustudy" value="engineer">Engineering
							<input type="radio" name="ustudy" value="doctor">Medical
							<input type="radio" name="ustudy" value="businessman">Others
						</div>
						<div class="form-group lol">
							<label for="" class="control-label">Health or Wealth?</label>
							<input type="radio" name="uhw" value="health">Health
							<input type="radio" name="uhw" value="wealth">Wealth
						</div>
						<div class="form-group lol">
							<label for="" class="control-label">Select your contry?</label>
							<select name="ucountry" id="">
								<option value="asian" cheked>Bangladesh</option>
								<option value="american">USA</option>
								<option value="asian">Srilanka</option>
								<option value="ausi">australia</option>
								<option value="african">Egypt</option>
								<option value="asian">Afganistan</option>
								<option value="sirian">Siria</option>
							</select>
						</div>
						<div class="form-group lol">
							<label for="" class="control-label">Select your religion</label>
							<select name="urel" id="">
								<option value="muslim">Islam</option>
								<option value="buddho">Buddhist</option>
								<option value="hindu">Hindus</option>
								<option value="christian">Christ</option>
								<option value="others">Others</option>
							</select>
						</div>
						

							<button type="submit" class="btn btn-primary" href="seefuture.php">Click Here
							</button>
					</form>
				</div>
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