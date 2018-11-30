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
					<li><a href="project.php">Home</a></li>
					<li><a href="search.php">Search</a></li>
					<li><a href="registeration.php">Registeration</a></li>
					<li><a href="login.php">LogIn</a></li>
					  
					</ul>
				</div>
		</div>
	</nav>
		
	<!--End nav -->
	<!-- start salider-->
	
	<div id="myslide" class="carousel slide  hidden-xs" data-ride="carousel">
   
   <!-- start indicators-->
   
		<ol class="carousel-indicators">

		<li data-target="#myslide" data-slide-to="0" class="active"></li> 
		<li data-target="#myslide" data-slide-to="1"></li>
		<li data-target="#myslide" data-slide-to="2"></li>
		<li data-target="#myslide" data-slide-to="3"></li>
		<li data-target="#myslide" data-slide-to="4"></li>
		</ol>

  <!-- End indicators-->

  <!--start images and h2 and p -->
 
		<div class="carousel-inner" role="listbox">
		
			<div class="item active">
				<img src="image/p7.jpg" height = "500ox" alt="pic">
					
			</div>
	
			<div class="item">
			
				<img src="image/p15.jpg" alt="pic2">
				
			
			</div>
	
			<div class="item">
				<img src="image/t2.jpg"  alt="pic3">
			
			</div>
			<div class="item">
				<img src="image/t3.jpg"  alt="pic3">
				
			
			</div>
			<div class="item">
				<img src="image/p12.jpg"  alt="pic3">
				
			
			</div>
			
		</div>

   <!--end images and h2 and p -->
   
       <!--button prev and next -->
		<a class="left carousel-control" href="#myslide" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myslide" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
	</div>		
 <!-- ------End salid---------------->
		<section class ="background">
			<div class = "backImage">
				<div class = "show">
					<div class = "contaner">
						<h2 class = "text-center"> More Details About The Apartments </h2>
						<div class ="row details">
							<div class = "col-xs-4 col-xs-offset-2">
								<div class = "detail">
								<?php
									include "class.php";
									if(isset($_POST['submit'])){
									$rooms = $_POST['sel'];
									$area = $_POST['sele'];
									$furn = $_POST['selec'];
									$price = $_POST['select2'];

									$q ="SELECT*FROM apartment where rooms=? and Area=? and Furnished=? and Price=?";
									$rows = $db->getRows($q,array($rooms,$area,$furn,$price));

									if(count($rows)>0){
									
										foreach($rows as $row){
										
								?>
											<div class ="container">
											<div class = "row">
														
											<div class = 'col-md-6'>
								
											<?php
											echo"<p class = 'wow bounceInLeft' data-wow-duration='2s' data-wow-delay='.5s' data-wow-offset= '100'>rooms : <span>$row[1]</span></p>";
											echo"<p class = 'wow bounceInLeft' data-wow-duration='2s' data-wow-delay='1s' data-wow-offset= '100'>Bathroom : <span>$row[2]</span></p>";
											echo"<p class = 'wow bounceInLeft' data-wow-duration='2s' data-wow-delay='1.5s' data-wow-offset= '100'>Area : <span>$row[3] M<sup>2</sup></span> </p>";
											echo"<p class = 'wow bounceInLeft' data-wow-duration='2s' data-wow-delay='2s' data-wow-offset= '100'>Floor : <span>$row[4]</p>";
											echo"<p class = 'wow bounceInLeft' data-wow-duration='2s' data-wow-delay='2.5s' data-wow-offset= '100'>Furnished : <span>$row[5]</span></p>";											
											echo"<p class = 'wow bounceInLeft' data-wow-duration='2s' data-wow-delay='2.8s' data-wow-offset= '100'> Advertising number : <span>$row[6]</span> </p>";
											echo"<p class = 'wow bounceInLeft' data-wow-duration='2s' data-wow-delay='3s' data-wow-offset= '100'>Price : <span>$row[7]</span><span>EGP</span></p>";
											echo"<p class = 'wow bounceInLeft' data-wow-duration='2s' data-wow-delay='3.5s' data-wow-offset= '100'> Address : <span>$row[8] </span></p>";	
											
											echo"<p class = 'wow bounceInLeft' data-wow-duration='2s' data-wow-delay='3.5s' data-wow-offset= '100'> Phone : <span>$row[9] </span></p>";	
											
											
											?>
											</div>
											<div class = 'col-md-5'>
											<?php
											echo "<img src ='$row[10]' class = 'img-responsive img-thumbnail img-rounded img-circle wow zoomIn' data-wow-delay='0.5s' data-wow-offset= '200'>";
											?>
											</div>
											</div>
											</div>
											<?php
										
										}
									

									}

									else{
									echo "<p class = 'noApart wow bounceInLeft' data-wow-duration='2s' data-wow-offset= '200'> There Is No Apartment With These Specifications</p>";
									}

									}
									
									?>

													
								</div>
							</div>
							<div class = "col-xs-5">
								
							</div>
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
					<span>  Apartment &copy  2018 </span>
				</div>
			</div>
		</section>			

		
		
		<script src="js/jquery-1.12.4.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/style.js"></script>
		<script src="js/wow.min.js"></script>
		<script>
 	     new WOW().init();
         </script>
	</body>
</html>
		
