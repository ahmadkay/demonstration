	<!DOCTYPE html>
	<?php
	@session_start();
	require("conn/connect.php");
	$id=$_SESSION['username'];
	$sql= "SELECT *from `profile` join users on profile.userid=users.id where users.username=:id";
	$stmt=$pdo->prepare($sql);
	$stmt->bindParam(':id',$id);
	$stmt->execute();
	$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
	$row= $rows[0];
	?>
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
		<title>::profile</title>

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
			          <li><a href="stu.php">Home</a></li>				  
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
							students Page				
							</h1>	
						
						<p>Welcome <?php echo $row['lastname'];?></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
			<!-- Start search-course Area -->
			<section class="search-course-area relative">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-lg-6 col-md-6 search-course-left">
							<h1 class="text-white">
						Welcome To Abi Private School! <br>
					
							</h1>
							<p>
								

							</p>
							<div class="row details-content">
								<div class="col single-detials">
									<span class="lnr lnr-license"></></span>
									<a href="#"><h4>Our Vision</h4></a>		
									<p>
							Our vision at Abi private school is to empower students to aquire, 
							demonstrate, articulate and value knowledge and skills that will support 
							them, as life-long learners, to patricipate the core values of the school: 
							respect, tolerance, inclusion and excellent.                                                       

									</p>						
								</div>
								<div class="col single-detials">
									<span class="lnr lnr-license"></span>
									<a href="#"><h4>Our Mission</h4></a>		
									<p>
								Is to enable all learners access to learning throught provision of:
        ::Differentiated in depth and cohesive learning programs aligned to year level content and
		achievment standard informed by the nigerian curriculum 
        ::Highly effective teachers,focused on improving students outcomes, 

	through their commitment to ongoing professional development, quality teaching evidence based practice, 
	coaching and monitoring and colabration.
        ::A quqlity inclusive learning environment that is responsive to student voice
        ::Enriching, enlerging resource</
									</p>						
								</div>								
							</div>
						</div>
						
					</div>
				</div>	
			</section>
			<!-- End search-course Area -->
				
			
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