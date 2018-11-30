<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet"  href="css/font-awesome.min.css">
		<link rel="stylesheet"  href="css/bootstrap-select.min.css">	
		<link rel="stylesheet"  href="css/hover.css">
		<link rel="stylesheet"  href="css/animate.css">
		<link rel="stylesheet"  href="css/index.css">
		<script src="js/html5shiv.min.js"></script>
		<script src="js/respond.min.js"></script>
	</head>
	
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top nav">
			<div class="container">
   <!--start header-->
   <!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ournavbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
			
					<a class="navbar-brand hvr-skew-forward" href="#">Apartments</a>
				</div>
		<!--end header-->
		
				<div class="collapse navbar-collapse" id="ournavbar">
					<ul class="nav navbar-nav navbar-right">
					<li><a href="project.php">Home</a></li>
					<li><a href="search.php">Search</a></li>
					<li class="active"><a href="#">Add Apartment</a></li>
					
					  
					</ul>
				</div>
		</div>
	</nav>
		
	<!--End nav -->
		
			<?php
			include "class.php";
			if (isset($_POST['submit'])){

			$rooms = $_POST['sel'];
			$Bathroom =  $_POST['Bathroom'];
			$area = $_POST['sele'];
			$furn = $_POST['selec'];
			$Floor = $_POST['Floor'];
			$Advertising = $_POST['Advertising'];
			$price = $_POST['select2'];									
			$Address = $_POST['Address'];
			$Phone = $_POST['Phone'];
            $image="image/".md5(uniqid()).$_FILES['file1']['Image'];
			move_uploaded_file($_FILES['Image']['tmp_name'],$image);	
			$q = "INSERT INTO apartment(rooms,Bathroom,Area,Furnished,Floor,Advertising,Price,Address,Phone,Image)VALUES(?,?,?,?,?,?,?,?,?,?)";
			$db->queryop($q,array($rooms,$Bathroom,$area,$furn,$Floor,$Advertising,$price,$Address,$Phone,$image));
			}


			?>

			<section class = "contacts text-center">
				<div class = "contact">
					<div class = "container">
						<div class = "row">
							<i class = "fa fa-headphones fa-5x fa1"></i>
							
							<p class="lead lead1"> Add The Apartment You Want To Sell </p>
						
						
							<form action ="" method ="POST" role = "form" enctype="multipart/form-data">
								<div class ="col-xs-6 col-xs-offset-3 wow zoomIn data-wow-delay='0.5s'" data-wow-offset= "100">

									
									<div class = "addApartment form-group">
					
										<select name ="sel" class="addApartment selectpicker" data-style="btn-danger" title = "Number Rooms">
										<option value ="3">3</option>
										<option value ="4">4</option>
										<option value ="5">5</option>
										<option value ="6">6</option>
										<option value ="7">7</option>
										<option value ="8">8</option>
										<option value ="9">9</option>
										<option value ="10">10</option>
										</select>
									</div>
									<div class = "addApartment form-group">
										<select name ="sele" class="addApartment selectpicker" data-style="btn-danger" title = "Area">
										<option value ="300">300</option>
										<option value ="400">400</option>
										<option value ="500">500</option>						
										<option value ="600">600</option>
										<option value ="700">700</option>
										<option value ="800">800</option>
										<option value ="900">900</option>
										</select>
									</div>
									<div class = "addApartment form-group">
					
										<select name ="selec" class="addApartment selectpicker" data-style="btn-danger"  title = "Furnished">
										<option value ="Yes">Yes</option>
										<option value ="No">No</option>
						
										</select>
									</div>
									<div class = "addApartment form-group">
					
										<select name ="select2" class="addApartment selectpicker" data-style="btn-danger" title = "Price">
											<option value ="100000">100000 EGP</option>
											<option value ="250000">250000 EGP</option>
											<option value ="300000">300000 EGP</option>
											<option value ="400000">400000 EGP</option>
											<option value ="500000">500000 EGP</option>
											<option value ="550000">550000 EGP</option>
											<option value ="1000000">1000000 EGP</option>
											<option value ="2000000">2000000 EGP</option>
											
										</select>
									</div>
								</div>
								<div class ="col-xs-5 col-xs-offset-1 wow bounceInLeft" data-wow-duration="1.5s" data-wow-offset= "80">
									<div class = "form-group phone">
										<input type ="text" name ="Phone"  class ="form-control input-lg phone" placeholder = "Phone Number">
									</div>
								
									

									<div class = "form-group">
										<input type ="text" name ="Floor" class ="form-control input-lg" placeholder = "Floor">
									</div>
									<div class = "form-group">
										<input type ="text" name ="Advertising" class ="form-control input-lg" placeholder = "Advertising">
									</div>
								</div>
								<div class ="col-xs-5 col-xs-offset-1 wow bounceInRight" data-wow-duration="2s" data-wow-offset= "80">
									<div class = "form-group">
										<input type ="text" name ="Bathroom" class ="form-control input-lg" placeholder = "Number Bathroom">
									</div>
									<div class = "form-group">
										<input type ="text" name ="Address"  class ="form-control input-lg" placeholder = "Address">
									</div>
									
									<div class = "form-group">
										<input type ="file" name ="Image"  class ="form-control input-lg" placeholder = "Image">
									</div>
								</div>

								<input type ="submit" name ="submit" value ="Add_Apartment" class = "sub1 btn btn-danger btn-lg"><br>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class = "footer">
			<div class = "container">
				<div class = "icons">
				<ul>
					<li><i class = "fa fa-pinterest fa-lg "></i></li>
					<li><i class = "fa fa-google-plus fa-lg "></i></li>				
					<li><i class = "fa fa-apple fa-lg "></i></li>
					<li><i class = "fa fa-rss fa-lg"></i></li>
					<li><i class = "fa fa-facebook fa-lg"></i></li>
					<li><i class = "fa fa-twitter fa-lg"></i></li>
					<li><i class = "fa fa-instagram  fa-lg"></i></li>
					</ul>
					<span> Apartment &copy  2018  </span>
				</div>
			</div>
		</section>			

		
			<script src="js/jquery-1.12.4.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<script src="js/style.js"></script>
			<script src="js/bootstrap-select.min.js"></script>
			<script src="js/wow.min.js"></script>
			<script>
			 new WOW().init();
			 </script>
	</body>
</html>
