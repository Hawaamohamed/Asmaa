<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet"  href="css/font-awesome.min.css">
		<link rel="stylesheet"  href="css/hover.css">
		<link rel="stylesheet"  href="css/animate.css">
		<link rel="stylesheet"  href="css/LogAndReg.css">
		<script src="js/html5shiv.min.js"></script>
		<script src="js/respond.min.js"></script>
		
		
	</head>
	
	<body>
		
		
		<div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="login.php">Login</a>
							</div>
							<div class="col-xs-6">
								<a href="#" class="active" id="register-form-link">Register</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								
								<form  id="logInForm" action ="" method ="POST" role="form">
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
									</div>
									<div class="form-group">
										<input type="email" name="email" id="email" tabindex="2" class="form-control" placeholder="Email Address" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="3" class="form-control" placeholder="Password">
									</div>
									<div class="form-group">
										<input type="password" name="confirm-password" id="confirmPassword" tabindex="4" class="form-control" placeholder="Confirm Password">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												
												<input type="submit" name="submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php 	
	session_Start();
			include "class.php";
			if (isset($_POST['submit'])){

			$username = $_POST['username'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			

			$q = "INSERT INTO regisers(username,email,password)VALUES(?,?,?)";
			$db->queryop($q,array($username,$email,$password));
			
			$q ="SELECT * FROM regisers where username=?  and password=?";
			$rows = $db->getRows($q,array($username,$password));

		
				
					foreach($rows as $row){
						$_SESSION['user_id']=$row[0];
						$_SESSION['name']=$row[1];
						$_SESSION['email']=$row[2];	
						header('Refresh:0;url=project.php');
					}
				

			}
			?>

			<script src="js/jquery-1.12.4.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<script src="js/k.js"></script>
			<script src="js/wow.min.js"></script>
			<script>
			 new WOW().init();
			 </script>

</body>
</html>
