<!DOCTYPE html>
<html lang="en">
<head>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="human_mind.css">
		<link rel="stylesheet" href="responsive.css">
	<meta charset="UTF-8">
	<title>personal</title>
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
				<div class="col-md-6 left leftp">
					<img src="images/brainF.png" alt="">
					<p>When you see that your mind is supporting you.
					Surely can do something stuning you couldn't do ever</p>	
				</div>
				<div class="col-md-6 right">
					<br><p>You have to input everything according to your present(whatever you were in the past) to see the better result.</p>
					<form action="seepersonality.php" method="post" class="">
						<div class="form-group">
							<br><br><label class="control-label" for="">
								1.When you feel like a happy man in day?
							</label><br>
							<input type="radio" name="day" value=2>Morning
							<input type="radio" name="day" value=4>Afternoon or evening
							<input type="radio" name="day" value=6>Late-night
							<br><br><label class="control-label" for="">
								2.How you walk generaly?
							</label><br>
							<input type="radio" name="walk" value=6>Quickly with long steps
							<input type="radio" name="walk" value=4>Quickly with short stepd
							<input type="radio" name="walk" value=7>Slowly and watching nature
							<input type="radio" name="walk" value=2>Slowly and head down
							<input type="radio" name="walk" value=1>Very slowly
							<br><br><label class="control-label" for="">
								3.Your attitude when you talk with someone.
							</label><br>
							<input type="radio" name="talk" value=4>Band two hands in chest
							<input type="radio" name="talk" value=2>Two hand get together
							<input type="radio" name="talk" value=5>Putting one or both  hand in hip or pocket.
							<input type="radio" name="talk" value=7>Touching the person's body 
							<input type="radio" name="talk" value=6>Touching your  head,ear or skin.  
							<br><br><label class="control-label" for="">
								4.Body when you sitdown to take rest.
							</label><br>
							<input type="radio" name="sitbody" value=4>Band two knees infront of your face.
							<input type="radio" name="sitbody" value=6>Legs touch ground at 90'.
							<input type="radio" name="sitbody" value=2>Legs streight.
							<input type="radio" name="sitbody" value=1>Band a leg.
							<br><br><label class="control-label" for="">
								5.When you get pleasure.
							</label><br>
							<input type="radio" name="pleasure" value=6>Loudly laugh
							<input type="radio" name="pleasure" value=4>Laugh low volume
							<input type="radio" name="pleasure" value=3>Silently apritiate
							<input type="radio" name="pleasure" value=5>Give a smile
							<br><br><label class="control-label" for="">
								6.When you go to a party.
							</label><br>
							<input type="radio" name="party" value=6>Welcome and handshake with every one.
							<input type="radio" name="party" value=4>Silently entre and search someone known.
							<input type="radio" name="party" value=2>Silently and stay in an angle
							<br><br><label class="control-label" for="">
								7.Someone knock you when working with deep consentration.
							</label><br>
							<input type="radio" name="knock" value=6>Welcome the person.
							<input type="radio" name="knock" value=2>You become angree.
							<input type="radio" name="knock" value=4>Sometimes angree sometimes welcome.
							<br><br><label class="control-label" for="">
								8.Your favourite color.
							</label>
							<select name="color" id="">
								<option value=6>Red</option>
								<option value=6>Orange</option>
								<option value=7>Black</option>
								<option value=5>Yellow</option>
								<option value=5>Light blue</option>
								<option value=4>Green</option>
								<option value=3>Deep Blue</option>
								<option value=3>Violet</option>
								<option value=2>Gray</option>
								<option value=2>Brown</option>
							</select>
							<br><br><label class="control-label" for="">
								9.Possition of sleeping at night.
							</label><br>
							<input type="radio" name="sleep" value=7>Streight
							<input type="radio" name="sleep" value=6>Prostrate
							<input type="radio" name="sleep" value=4>one sided
							<input type="radio" name="sleep" value=2>One hand under the head
							<input type="radio" name="sleep" value=1>head under the pillow
							<br><br><label class="control-label" for="">
								10.Swapan at sleep.
							</label><br>
							<input type="radio" name="dream" value=4>Falling from something
							<input type="radio" name="dream" value=2>Fighting or running away from someone
							<input type="radio" name="dream" value=3>Searching someone
							<input type="radio" name="dream" value=5>Flying or floating
							<input type="radio" name="dream" value=6>You have dream vary rare
							<input type="radio" name="dream" value=1>Happy dream all the times
							<br><br><button type="submit" class="btn btn-primary" href="seepersonality.php">Click Here
							</button>
						</div>
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