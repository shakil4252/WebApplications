<!DOCTYPE html>
<html lang="en">
<head>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="human_mind.css">
		<link rel="stylesheet" href="reg.css">
		<link rel="stylesheet" href="responsive.css">
	<meta charset="UTF-8">
	<title>log</title>
</head>
<body>
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
				<div class="col-md-7 minlog">
					<form action="login_pan.php" method="post" class="form-horizontal">

				  		<div class="form-group">
				  			<label for="email" class="control-label col-md-2">User Name</label>
				  			<div class="col-md-10">
				  				<input type="text" name="username" class="form-control" placeholder="name">
				  			</div>
					  	</div>
					  	<div class="form-group">
					  			<label for="" class="control-label col-md-2">Password</label>
					  		<div class="col-md-10">
					  			<input type="password" name="userpass" class="form-control" placeholder="password">
					  		</div>
					  	</div>
						<div class="form-group text-center">
							<button class="btn btn-primary" type="submit">Log In</button>
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