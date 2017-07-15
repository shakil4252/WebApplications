<!DOCTYPE html>
<html lang="en">
<head>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="human_mind.css">
		<link rel="stylesheet" href="responsive.css">
	<meta charset="UTF-8">
	<title>reg</title>
</head>
<body>
<!-- <?php 
	// session_start();
	// $valuecheck=0;
	// $valuecheck=$_SESSION['check'];
	// $count=0;
	// $_SESSION['counter']=$count;
	
	// $entry=0;
	// $checkentry=$entry;
	// $_SESSION['getentry']=$entry;
	// $entry=$_SESSION['checkentry'];
	// if($valuecheck>0){
	// 	echo "you have to input every thing";
	//}
	
	//$checkentry++;
 ?> -->
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
					<a href="index.html">
						<button class="btn btn-primary">
							<span><i class="glyphicon glyphicon-home"></i></span>
						</button>
					</a>
			
				</div>
			</div>
		</div>
	</div>
	<div class="mainbody">
		<div class="container">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-7 min">
					<form action="reg_pan.php" method="post" class="form-horizontal">

				  		<div class="form-group">
				  			<label for="email" class="control-label col-md-2">User Name</label>
				  			<div class="col-md-10">
				  				<input type="text" name="uname" class="form-control" placeholder="name">
				  			</div>
					  	</div>
				  		<div class="form-group">
				  			<label for="email" class="control-label col-md-2">Email</label>
				  			<div class="col-md-10">
				  				<input type="text" name="umail" class="form-control" placeholder="email">
				  			</div>
					  	</div>
					  	<div class="form-group">
					  			<label for="" class="control-label col-md-2">Password</label>
					  		<div class="col-md-10">
					  			<input type="password" name="upass" class="form-control" placeholder="password">
					  		</div>
					  	</div>
				  		<div class="form-group">
				  			<label for="email" class="control-label col-md-2">Mobile No.</label>
				  			<div class="col-md-10">
				  				<input type="text" name="umob" class="form-control" placeholder="mobile">
				  			</div>
					  	</div>
						<div class="form-group">
							<label for="" class="control-label">How old are you?</label><br>
							<input type="radio" name="old" value="18">18-
							<input type="radio" name="old" value="18+">18
							<input type="radio" name="old" value="18++">18+
						</div>
						<div class="form-group lol">
							<label for="" class="control-label">Favourite Color</label><br>
							<select name="ucol" id="">
								<option value="no choice"checked>color</option>
								<option value="green">Green</option>
								<option value="blue">Blue</option>
								<option value="red">Red</option>
								<option value="gray">Gray</option>
								<option value="yellow">Yellow</option>
								<option value="violet">Violet</option>
								<option value="orange">Orange</option>
								<option value="black">Black</option>
								<option value="white">White</option>
							</select>
						</div>
							<div class="form-group text-center">
								<button class="btn btn-primary" type="submit">Registration</button>
							</div>
					</form>
				</div>
				<div class="col-md-3"></div>
			</div>
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
