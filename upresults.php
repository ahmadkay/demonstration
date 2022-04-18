<?php
session_start();
$con = mysqli_connect("localhost","root","","abi");
if(mysqli_connect_errno()){
 echo "fail to connect: ". mysqli_connect_error();

}
$sql= "Select teachers.teacherID, teacher.teachersurname from teachers join allocation on allocation.class, allocation.subject";
?>
	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>::Upload Reslts</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">			
			<link rel="stylesheet" href="css/jquery-ui.css">			
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>	
		 <header id="header" id="home">
	  		<div class="header-top">
	  			<div class="container">
			  		<div class="row">
			  			<div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">				
			  			</div>
			  			<div class="col-lg-6 col-sm-6 col-4 header-top-right no-padding">
			  				<a href="tel:+234 8031936094"><span class="lnr lnr-phone-handset"></span> <span class="text">For Help: +234 8031936094</span></a>
			  				<a href="mailto:abiprivatescchool93@gmail.com"><span class="lnr lnr-envelope"></span> <span class="text">abipriateschool93@gmail.com
						</span></a>			
			  			</div>
			  		</div>			  					
	  			</div>
			</div>
		    <div class="container main-menu">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			        <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			          <li><a href="tea.php">Home</a></li>
			         	          					          		          
			          <li><a href="login.php">Logout</a></li>
			        </ul>
			      </nav><!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
		  </header><!-- #header -->
			  
			<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
						Upload Results				
							</h1>	
						
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
				
			<!-- Start events-list Area -->
			<section class="events-list-area section-gap event-page-lists">
				<div class="container">
				<div  style="width:500px">
					<form action="resultdex.php" method="POST" enctype="multipart/form-data">
						<fieldset>
							<legend>Upload results</legend>
					<select name="class" class="form-control" required>
						<option>Select class</option>
						<?php
						$sql = mysqli_query($con,"SELECT * from class");
						while($row = mysqli_fetch_array($sql)){
							echo "<option value='".$row['id']."'>".$row['class']."</option>";
						}
						?>
					</select></p>
					<select name="subject" class="form-control" required>
						<option>Select subject</option>
						<?php
						$sql = mysqli_query($con,"select * from subject ");
						while($row = mysqli_fetch_array($sql)){
							echo "<option value='".$row['id']."'>".$row['subject']."</option>";
						}
						?>
					</select></p>

					<input type="file" name="file" /></p>
		
				
					
					<input type="submit" value="submit" class="form-btn" name="submit" style="background:yellowgreen; color:white">
						</fieldset>
					</form>
					</div>
				</div>	
			</section>
			<!-- End events-list Area -->
				

			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					
					<div class="footer-bottom row align-items-center justify-content-between">
						<p class="footer-text m-0 col-lg-6 col-md-12">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <a href="mailto:ahmadkamalabdallah@gmail.com">
</a>design and developed by <a href="mailto:ahmadkamalabdallah@gmail.com">
ahmadkamalabdallah@gmail.com</a>
</p>
						
					</div>						
				</div>
			</footer>	
			<!-- End footer Area -->	

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
    		<script src="js/jquery.tabs.min.js"></script>						
			<script src="js/jquery.nice-select.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>									
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>