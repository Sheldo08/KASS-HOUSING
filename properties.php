<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Findstate - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Findstate</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>
	          <li class="nav-item"><a href="agent.php" class="nav-link">Agent</a></li>
	          <li class="nav-item active"><a href="properties.php" class="nav-link">Property</a></li>
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2 ftco-degree-bg js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="overlay-2"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 mb-5 text-center">
            <h1 class="mb-3 bread">Properties</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Properties <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section goto-here">
    	<div class="container">
        <div class="row">

		<?php
		$db= mysqli_connect("localhost","root","","sheldoo");

		$page = isset($_GET['page']) ? $_GET['page'] : '';
		if($page=="" || $page=="1"){
			$page1=0;
		}
		else{
			$page1= ($page*6)-6;
		}

        $sql = "SELECT * FROM property limit $page1,6";
        $result= mysqli_query($db,$sql);
        while ($row = mysqli_fetch_array($result)){	

        echo "<div class='col-md-4'>
        		<div class='property-wrap ftco-animate'>
        			<div class='img d-flex align-items-center justify-content-center' style='background-image: url(images/".$row['ImageName'].");'>
        				<a href='login.php?id=".$row['ImagesID']."' class='icon d-flex align-items-center justify-content-center btn-custom'>
        					<span class='ion-ios-link'></span>
        				</a>
        				<div class='list-agent d-flex align-items-center'>
        					<a href='#' class='agent-info d-flex align-items-center'>
        						<h3 class='mb-0 ml-2'>Heywire</h3>
        					</a>
        					<div class='tooltip-wrap d-flex'>
        						<a href='#' class='icon-2 d-flex align-items-center justify-content-center' data-toggle='tooltip' data-placement='top' title='Bookmark'>
        							<span class='ion-ios-heart'><i class='sr-only'>Bookmark</i></span>
        						</a>
        						<a href='#' class='icon-2 d-flex align-items-center justify-content-center' data-toggle='tooltip' data-placement='top' title='Compare'>
        							<span class='ion-ios-eye'><i class='sr-only'>Compare</i></span>
        						</a>
        					</div>
        				</div>
        			</div>
        			<div class='text'>
        				<p class='price mb-3'><span class='orig-price'> GHC ".$row['Pricee']."</span></p>
        				<h3 class='mb-0'><a href='properties-single.html'> ".$row['Enterprisee']."</a></h3>
        				<span class='location d-inline-block mb-3'><i class='ion-ios-pin mr-2'></i> ".$row['Locationn']."</span>
        				<ul class='property_list'>
        					<li><span class='flaticon-bed'></span> ".$row['Bedroomm']."</li>
        					<li><span class='flaticon-bathtub'></span> ".$row['Washroomm']."</li>
        				</ul>
        			</div>
        		</div>
        	</div>";
		}
	    
			echo "</section>";
		$sql1 = "SELECT * FROM property";
		$row = mysqli_query($db,$sql1);
		$count = mysqli_num_rows($row);
		$per_page = ceil($count/6);

		echo "<div  style='width: 70%; margin: auto; text-align: center;'>";
		for($b = 1; $b <=$per_page; $b++){
            ?> <a class="btn btn-primary"
            style='font-size: 30px;color: black;'href="properties.php?page=<?php echo $b; ?>"> <?php echo "&laquo; ". $b." &raquo; ";?></a> <?php
        }
		echo "</div>";
        
		mysqli_close($db); ?>

		

<footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">SheldonHomes</h2>
              <p>A home away from home</p>
              <ul class="ftco-footer-social list-unstyled mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Community</h2>
              <ul class="list-unstyled">
                <li><a href="agent.php"><span class="icon-long-arrow-right mr-2"></span>For Agents</a></li>
                <li><a href="contact.php"><span class="icon-long-arrow-right mr-2"></span>Complaints</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <ul class="list-unstyled">
                <li><a href="index.php"><span class="icon-long-arrow-right mr-2"></span>Our Story</a></li>
                <li><a href="agent.php"><span class="icon-long-arrow-right mr-2"></span>Meet the team</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Company</h2>
              <ul class="list-unstyled">
                <li><a href="services.php"><span class="icon-long-arrow-right mr-2"></span>About Us</a></li>
                <li><a href="contact.php"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Home No.11 Legon - Main campus, University of Ghana</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+233 50 919 1783</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope pr-4"></span><span class="text">homes@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
          </div>
        </div>
      </div>
    </footer>
    
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>