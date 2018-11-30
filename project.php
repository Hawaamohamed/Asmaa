<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet"  href="css/font-awesome.min.css">
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
					<li class="active"><a href="#">Home</a></li>
					<li><a href="search.php">Search</a></li>
					<?php
					session_start();
					if(isset($_SESSION['user_id'])){
					echo '<li><a href="AddApartment.php">Add Apartment</a></li>';
					echo '<li><a href="logout.php">Logout</a></li>';

					}else
					{
						echo '<li><a href="registeration.php">Registeration</a></li>
					<li><a href="login.php">LogIn</a></li>';
					}
					?>
					
					 
					</ul>
				</div>
		</div>
	</nav>
		
	<!--End nav -->
		
	<!-- start salider-->
	
	<div id="myslide" class="carousel slide  hidden-xs" data-ride="carousel">
   
		<ol class="carousel-indicators">

		<li data-target="#myslide" data-slide-to="0" class="active"></li> 
		<li data-target="#myslide" data-slide-to="1"></li>
		<li data-target="#myslide" data-slide-to="2"></li>
		<li data-target="#myslide" data-slide-to="3"></li>
		<li data-target="#myslide" data-slide-to="4"></li>
		</ol>

 
		<div class="carousel-inner" role="listbox">
		
			<div class="item active">
				<img src="image/h2.jpg" height = "500ox" alt="pic">
				<div class="carousel-caption">
					
					<p>Super LUX Apartment in Zahra Maadi</p>
					<p>2nd Floor</p>
					<p>Bedrooms: 2</p>
					<p>Reception :2 pieces </p>
					<p>Kitchen ahd Bath</p>
					<p>price :6500 EGP</p>
					
				</div>			
			</div>
	
			<div class="item">
			
				<img src="image/h1.jpg" alt="pic2">
				<div class="carousel-caption">
					
					<p>Apartment for sale in Nasr ElDin Khayr Zman Fully finished</p>
					<p> Floor :6</p>
					<p> Bedrooms :7</p>
					<p>Reception :2 pieces </p>
					<p>Kitchen and Bath</p>
					<p>price :65000 EGP</p>
				
				</div>
			
			</div>
	
			<div class="item">
				<img src="image/h3.jpg"  alt="pic3">
				<div class="carousel-caption">
					<p>Apartment Baddhsour Super Lux, Egypt, Cairo</p>
					<p> Floor :1</p>
					<p> Bedrooms :4</p>
					<p>Reception :1 pieces </p>
					<p>Kitchen and Bath</p>
					<p>price :100000 EGP</p>
				</div>
			
			</div>
			<div class="item">
				<img src="image/h4.jpg"  alt="pic3">
				<div class="carousel-caption">
					<p>Apartment with Rihanna bikimbund in front of Al Rehab Gate , Egypt</p>
					<p> Floor :5</p>
					<p> Bedrooms :6</p>
					<p>Reception :1 pieces </p>
					<p>Kitchen and Bath</p>
					<p>price :500000 EGP</p>
				</div>
			
			</div>
			<div class="item">
				<img src="image/h5.jpg"  alt="pic3">
				<div class="carousel-caption">
					<p>Apartment Baddhsour Super Lux, Egypt, Cairo</p>
					<p> Floor :7</p>
					<p> Bedrooms :9</p>
					<p>Reception :2 pieces </p>
					<p>Kitchen and Bath</p>
					<p>price :800000 EGP</p>
				</div>
			
			</div>
			
		</div>

		<a class="left carousel-control" href="#myslide" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myslide" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
	</div>		

 
	<!-- start Offering table -->
  
		<section class = "Offering text-center">
			<div class = "container">
				<h2> Offering avaliable apartments </h2>
				<div class = "row">
					<div class = "col-md-3 col-sm-6 col-xs-12">
						<div class = "apart wow bounceInLeft" data-wow-duration="2s" data-wow-offset= "200">
							<img src ="image/p13.jpg"width = "100px" height = "100px">
							<form action="showMore.php" name ="form" onsubmit = "return fun();" method="POST">
								<ul class = "list-unstyled">
									<input type = "hidden" value ="15" name = "id">
									<li>Rooms: <span>4</span></li>
									<li>Bathroom: <span>1</span></li>
									<li>Area: <span>300<sup>2<span></li>
									<li>Furnished : <span>No</span></li>
									<li>Floor : <span>1</span></li>
									<li>Price : <span>500000 EGP</span></li>											
								</ul>
								<div>
								<i class = "fa fa-star fa-lg"></i>
								<i class = "fa fa-star fa-lg"></i>
								<i class = "fa fa-star fa-lg"></i>
								</div>
								<br><br>
								<input type ="submit" name ="submit" value ="Show Now" class = "btn btn-primary" style = "margin-bottom:6%">
							</form>
								
						</div>
					</div>
						
					<div class = "col-md-3 col-sm-6 col-xs-12">
						<div class = "apart wow bounceInLeft" data-wow-duration="2s" data-wow-offset= "200">
							<img src ="image/p14.jpg"width = "100px" height = "100px">
							
							<form action="showMore.php" name ="form" onsubmit = "return fun();" method="POST">
								<ul class = "list-unstyled">
									<input type = "hidden" value ="7" name = "id">
									<li>Rooms: <span>7</span></li>
									<li>Bathroom: <span>2</span></li>
									<li>Area: <span>600 <sup>2</span></li>
									<li>Furnished: <span>No </span></li>
									<li>Floor: <span>4 </span></li>
									<li>Price: <span>500000 EGP </span></li>											
								</ul>
								<div>
								<i class = "fa fa-star fa-lg"></i>
								<i class = "fa fa-star fa-lg"></i>
								<i class = "fa fa-star fa-lg"></i>
								</div>
								<br><br>
								<input type ="submit" name ="submit" value ="Show Now" class = "btn btn-primary" style = "margin-bottom:6%">
							</form>
							
						</div>
					</div>
					
					<div class = "col-md-3 col-sm-6 col-xs-12">
						<div class = "apart wow bounceInRight" data-wow-duration="2s" data-wow-offset= "200">
							<img src ="image/p15.jpg"width = "100px" height = "100px">
							<form action="showMore.php" name ="form" onsubmit = "return fun();" method="POST">
								<ul class = "list-unstyled">
									<input type = "hidden" value ="1" name = "id">
									<li>Rooms: <span>6 </span></li>
									<li>Bathroom: <span>1 </span></li>
									<li>Area: <span>300 <sup>2 </span></li>
									<li>Furnished: <span>No </span></li>
									<li>Floor: <span>3 </span></li>
									<li>Price: <span>100000 EGP </span></li>											
								</ul>
								<div>
								<i class = "fa fa-star fa-lg"></i>
								<i class = "fa fa-star fa-lg"></i>
								<i class = "fa fa-star fa-lg"></i>
								</div>
								<br><br>
								<input type ="submit" name ="submit" value ="Show Now" class = "btn btn-primary" style = "margin-bottom:6%">
							</form>
						</div>
					</div>
					
					<div class = "col-md-3 col-sm-6 col-xs-12">
						<div class = "apart wow bounceInRight" data-wow-duration="2s" data-wow-offset= "200">
							<img src ="image/p16.jpg"width = "100px" height = "100px">
							<form action="showMore.php" name ="form" onsubmit = "return fun();" method="POST">
								<ul class = "list-unstyled">
									<input type = "hidden" value ="2" name = "id">
									<li>Rooms: <span>5</span></li>
									<li>Bathroom: <span>1</span></li>
									<li>Area: <span>400 <sup>2</span></li>
									<li>Furnished: <span>Yes</span></li>
									<li>Floor: <span>4</span></li>
									<li>Price: <span>1000000 EGP</span></li>											
								</ul>
								<div>
								<i class = "fa fa-star fa-lg"></i>
								<i class = "fa fa-star fa-lg"></i>
								<i class = "fa fa-star fa-lg"></i>
								</div>
								<br><br>
								<input type ="submit" name ="submit" value ="Show Now" class = "btn btn-primary" style = "margin-bottom:6%">
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class = "Offering text-center">
			<div class = "container">
				<h2> Apartments higher than the percentage of watching </h2>
				
				<div class = "row">
					<div class = "col-md-3 col-sm-6 col-xs-12">
						<div class = "apart wow bounceInLeft" data-wow-duration="2s" data-wow-offset= "200">
							<img src ="image/p17.jpg"width = "100px" height = "100px">
							<form action="showMore.php" name ="form" onsubmit = "return fun();" method="POST">
								<ul class = "list-unstyled">
									<input type = "hidden" value ="4" name = "id">
									<li>Rooms: <span>6 </span></li>
									<li>Bathroom: <span>2 </span></li>
									<li>Area: <span>800 <sup>2 </span></li>
									<li>Furnished: <span>YES </span></li>
									<li>Floor: <span>5 </span></li>
									<li>Price: <span>100000 EGP </span></li>											
								</ul>
								<div>
								<i class = "fa fa-star fa-lg"></i>
								<i class = "fa fa-star fa-lg"></i>
								<i class = "fa fa-star fa-lg"></i>
								<i class = "fa fa-star fa-lg"></i>
								<i class = "fa fa-star fa-lg"></i>
								</div>
								<br></br>
								<input type ="submit" name ="submit" value ="Show Now" class = "btn btn-primary" style = "margin-bottom:6%">
							</form>
							
						</div>
					</div>
				
					<div class = "col-md-3 col-sm-6 col-xs-12">
						<div class = "apart wow  bounceInLeft" data-wow-duration="2s" data-wow-offset= "200">
							<img src ="image/p18.jpg"width = "100px" height = "100px">
							<form action="showMore.php" name ="form" onsubmit = "return fun();" method="POST">
								<ul class = "list-unstyled">
									<input type = "hidden" value ="14" name = "id">
									<li>Rooms: <span>4</span></li>
									<li>Bathroom: <span>1</span></li>
									<li>Area: <span>400 <sup>2</span></li>
									<li>Furnished: <span>No</span></li>
									<li>Floor: <span>4</span></li>
									<li>Price: <span>400000 EGP</span></li>											
								</ul>
								<div>
								<i class = "fa fa-star fa-lg"></i>
								<i class = "fa fa-star fa-lg"></i>
								<i class = "fa fa-star fa-lg"></i>
								<i class = "fa fa-star fa-lg"></i>
								<i class = "fa fa-star fa-lg"></i>
								</div>
								<br><br>
								<input type ="submit" name ="submit" value ="Show Now" class = "btn btn-primary" style = "margin-bottom:6%">
							</form>
							
						</div>
					</div>
					
					<div class = "col-md-3 col-sm-6 col-xs-12">
						<div class = "apart wow bounceInRight" data-wow-duration="2s" data-wow-offset= "200">
							<img src ="image/p21.jpg"width = "100px" height = "100px">
							<form action="showMore.php" name ="form" onsubmit = "return fun();" method="POST">
								<ul class = "list-unstyled">
									<input type = "hidden" value ="15" name = "id">
									<li>Rooms: <span>4</span></li>
									<li>Bathroom: <span>1</span></li>
									<li>Area: <span>300 <sup>2</li>
									<li>Furnished: <span>No</span></li>
									<li>Floor: <span>1</span></li>
									<li>Price: <span>500000 EGP</span></li>											
								</ul>
								<div>
								<i class = "fa fa-star fa-lg"></i>
								<i class = "fa fa-star fa-lg"></i>
								<i class = "fa fa-star fa-lg"></i>
								<i class = "fa fa-star fa-lg"></i>
								<i class = "fa fa-star fa-lg"></i>
								</div>
								<br><br>
								<input type ="submit" name ="submit" value ="Show Now" class = "btn btn-primary" style = "margin-bottom:6%">
							</form>
							
						</div>
					</div>
					
					<div class = "col-md-3 col-sm-6 col-xs-12">
						<div class = "apart wow bounceInRight" data-wow-duration="2s" data-wow-offset= "200">
							<img src ="image/p20.jpg"width = "100px" height = "100px">
							<form action="showMore.php" name ="form" onsubmit = "return fun();" method="POST">
								<ul class = "list-unstyled">
									<input type = "hidden" value ="10" name = "id">
									<li>Rooms: <span>9</span></li>
									<li>Bathroom: <span>3</span></li>
									<li>Area: <span>900 <sup>2</span></li>
									<li>Furnished: <span>Yes</span></li>
									<li>Floor: <span>5</span></li>
									<li>Price: <span>2000000 EGP</span></li>											
								</ul>
								<div>
								<i class = "fa fa-star fa-lg"></i>
								<i class = "fa fa-star fa-lg"></i>
								<i class = "fa fa-star fa-lg"></i>
								<i class = "fa fa-star fa-lg"></i>
								<i class = "fa fa-star fa-lg"></i>
								</div>
								<br><br>
								<input type ="submit" name ="submit" value ="Show Now" class = "btn btn-primary" style = "margin-bottom:6%">
							</form>
							
						</div>
					</div>
				</div>
			</div>
		</section>
	
	
	<!-- description -->
	
	
	<section class = "about text-center">
        <div class = "text-center  wow zoomIn"  data-wow-offset="150">
			<h1> Description of Apertments</h1>
			<p class = "lead">Offering avaliable apartments and their specifications for users </p>
			
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
					<span>  Apartment &copy  2018 </span>
				</div>
			</div>
		</section>			
		
		<div id= "scroll-top">
		<i class = "fa fa-chevron-up fa-3x"></i>
		</div>
		
		<script src="js/jquery-1.12.4.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/style.js"></script>
		<script src="js/wow.min.js"></script>
		
		<script>
 	     new WOW().init();
         </script>
	</body>
</html>