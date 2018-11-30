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
					<li class="active"><a href="#">Search</a></li>				
					<li><a href="registeration.php">Registeration</a></li>
					<li><a href="login.php">LogIn</a></li>
					  
					</ul>
				</div>
		</div>
	</nav>
		
	<!--End nav -->
	<div class ="back">
	<div class ="backImag">
	<section class = "search text-center">
		<div class = "container">
			<h2> Searching  avaliable apartments </h2>
			<form action="Show2.php" name ="form" onsubmit = "return fun();" method="POST">
				<div class = "row">
					
					<div class = "select col-xs-6 col-xs-offset-3 wow zoomIn data-wow-delay='0.5s'" data-wow-offset= "100" form-group">
					
						<select name ="sel" class="inpt selectpicker " data-style="btn-danger" title = "Number Rooms">
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
				</div>
				
				<div class = "row">
					
					<div class = "select col-xs-6 col-xs-offset-3 wow zoomIn data-wow-delay='1s'" data-wow-offset= "100" form-group">
						<select name ="sele" class="inpt selectpicker" data-style="btn-danger" title = "Area">
						<option value ="300">300</option>
						<option value ="400">400</option>
						<option value ="500">500</option>						
						<option value ="600">600</option>
						<option value ="700">700</option>
						<option value ="800">800</option>
						<option value ="900">900</option>
						</select>
					</div>
				</div>
				
				<div class = "row">
					
					<div class = "select col-xs-6 col-xs-offset-3 wow zoomIn data-wow-delay='1.5s'" data-wow-offset= "100" form-group">
					
						<select name ="selec" class="inpt selectpicker" data-style="btn-danger"  title = "Furnished">
						<option value ="Yes">Yes</option>
						<option value ="No">No</option>
						
						</select>
					</div>
				</div>
				
				<div class = "row">
					
					<div class = "select col-xs-6 col-xs-offset-3 wow zoomIn data-wow-delay='2s'" data-wow-offset= "100" form-group">
					
						<select name ="select2" class="inpt selectpicker" data-style="btn-danger" title = "Price">
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
				
				<div class = "row">
					<div class = "col-xs-6 col-xs-offset-3">
						<input type ="submit" name ="submit" value ="Search" class = "sub btn btn-dark btn-lg">
					</div>				
				</div>
				
			</form>


			</div>
		</section>
			
	
		
		</div>
		</div>
		
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
		<script>
			function fun(){
				if(document.form.sel.selectedIndex == 0)
				{
					alert("please complete the options");
					document.form.sel.focus();
					return false;
				}
				
				if(document.form.sele.selectedIndex==0)
				{
					alert("please complete the options");
					document.form.sele.focus();
					return false;
				}
				if(document.form.selec.selectedIndex==0)
				{
					alert("please complete the options");
					document.form.selec.focus();
					return false;
				}
				if(document.form.select2.selectedIndex==0)
				{
					alert("please complete the options");
					document.form.select2.focus();
					return false;
				}
				
				return true;
			}
		</script>
		
		<script src="js/jquery-1.12.4.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/bootstrap-select.min.js"></script>
		<script src="js/style.js"></script>
		<script src="js/wow.min.js"></script>
		<script>
 	     new WOW().init();
         </script>
	</body>
</html>