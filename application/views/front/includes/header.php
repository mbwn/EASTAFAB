<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $title; ?></title>
	<base href="<?= site_url();?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="The EASTAFAB was founded in 2003 with the sole aim of promoting visual arts in East Africa. It was registered by the National Arts Council (Baraza la Sanaa la Taifa-BASATA) under the certificate No.BST/1325. It is a non-governmental and non-profit association run on a voluntary basis." />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="" />


  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
	
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url();?>images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo base_url();?>images/favicon.ico" type="image/x-icon">
	

	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/icomoon.css">
    <!--Bootstrap  -->
<!--	<link rel="stylesheet" href="css/bootstrap.css">-->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/magnific-popup.css">

	<!-- Owl Carousel  -->
<!--
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
-->

	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php base_url();?>assets/css/style.css" type="text/css">

	<!-- Modernizr JS -->
	<script src="<?php echo base_url();?>assets/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script src="<?php echo base_url();?>assets/js/carousel.js" type="text/javascript"></script>
    
    
    
    <!--Google Analytics-->
   
    <script src='<?php echo base_url();?>assets/js/analyticstracking.js' type="text/javascript"></script>
    
    <style>
.myImg {
    cursor: pointer;
    transition: 0.3s;
}

.myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,1); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
    margin: auto;
    display: block;
    width: 100%;
    max-width: 700px;
}

/* Caption of Modal Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}

/* Add Animation */
.modal-content, #caption {    
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)} 
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
}

/* The Close Button */
.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
}
</style>   
        
            
                
                        
    
	</head>
	<body>
		
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-right">
<!--                        <p class="num"><a href="tel:+255713975784">Call: +255 713 975 784</a></p>-->
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="top-menu">
			<div class="container">
				
					<div class="col-xs-2">
						<div id="fh5co-logo"><a href="<?php echo base_url();?>home">The East Africa Art Biennale Association</a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li class="active"><a href="<?php echo base_url();?>home">Home</a></li>
							<li><a href="<?php echo base_url();?>gallery">Gallery</a></li>
							<li><a href="<?php echo base_url();?>about">About Us</a></li>
							<li><a href="<?php echo base_url();?>artists">Artists</a></li>
							<li class="has-dropdown">
								<a href="<?php echo base_url();?>exhibition">Exhibitions</a>
								<ul class="dropdown">
									<li><a href="<?php echo base_url();?>exhibition/exhibition2011">Biennale 2011</a></li>
									<li><a href="<?php echo base_url();?>exhibition/exhibition2013">Biennale 2013</a></li>
									<li><a href="<?php echo base_url();?>exhibition/exhibition2015">Biennale 2015</a></li>
									<li><a href="<?php echo base_url();?>exhibition/exhibition2017">Biennale 2017</a></li>
								</ul>
							</li>
							<li><a href="<?php echo base_url();?>contact">Contact</a></li>
						</ul>
					</div>
				</div>
				
		
		</div>
	</nav>
