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
		<?php
			session_start();
			include "class.php";
			if (isset($_POST['submit'])){

				$username = $_POST['username'];
				$password = $_POST['password'];
				$q ="SELECT * FROM regisers where username=?  and password=?";
				$rows = $db->getRows($q,array($username,$password));

				if(count($rows)>0){
				
					foreach($rows as $row){
						$_SESSION['user_id']=$row[0];
						$_SESSION['name']=$row[1];
						$_SESSION['email']=$row[2];
						header('Refresh:0;url=project.php');
					}
				}
				else{
					echo "<p class = 'NotLogIn text-center wow zoomIn' data-wow-duration='2s' data-wow-offset= '200'> Please Do Registeration Before Login</p>";
				}						
			}
		?>

		<div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Login</a>
							</div>
							<div class="col-xs-6">
								<a href="registeration.php">Register</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form  id="logInForm" action="" method="post"  role="form" style="display: block;">
								
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group text-center">
										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
										<label for="remember"> Remember Me</label>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
										
											
												<input type="submit" name="submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="#" tabindex="5" class="forgot-password">Forgot Password?</a>
												</div>
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
			<script src="js/validate.js"></script>		
			<script src="js/jquery-1.12.4.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<script src="js/k.js"></script>
			<script src="js/wow.min.js"></script>
			<script>
			 new WOW().init();
			 </script>

</body>
</html>
