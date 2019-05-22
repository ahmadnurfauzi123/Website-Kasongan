<!DOCTYPE html>
<?php
include('koneksi.php');
?>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Home_Web Kasongan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

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

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Google Webfonts -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,500' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="css/simple-line-icons.css">
	<!-- Theme Style -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
<header id="fh5co-header" role="banner">
		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="navbar-header"> 
						<!-- Mobile Toggle Menu Button -->
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle visible-xs-block" data-toggle="collapse" data-target="#fh5co-navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
						<a class="navbar-brand">Website</a>
						</div>
						<div id="fh5co-navbar" class="navbar-collapse collapse">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="index.php"><span>Home <span class="border"></span></span></a></li>
								<li class="active"><a href="Gallery.php"><span>Gallery<span class="border"></span></span></a></li>
								<li><a href="Contact.php"><span>Contact<span class="border"></span></span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</header>
	<!-- END .header -->
	
	<div id="fh5co-main">
		<div class="fh5co-intro text-center">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<h1 class="intro-lead">Gallery Desa Pariwisata Kasongan </h1>
						<p class="">100% Website Desa Pariwisata Kasongan <a target="_blank">FREEHTML5.co.id</a></p>
					</div>
				</div>
			</div>
		</div>

	
		<div id="fh5co-team">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
								<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-staff to-animate">
								<?php
                    $id=isset($_GET['id'])?$_GET['id']:'';
                    $ambildata= mysqli_query($koneksi,"select * from galery where id ='1'");
                    $dtpost= mysqli_fetch_array($ambildata);?>            
                  <figure>
				  <img src="admin/uploads/<?php echo $dtpost ['file']; ?>" alt="" class="" width="184px" height="184px">
				</figure>
				<h3><?php echo $dtpost['nama']; ?></h3>	
			</div>
							<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-staff to-animate">
								<?php
                    $id=isset($_GET['id'])?$_GET['id']:'';
                    $ambildata= mysqli_query($koneksi,"select * from galery where id ='2'");
                    $dtpost= mysqli_fetch_array($ambildata);?>            
                  <figure>
				  <img src="admin/uploads/<?php echo $dtpost ['file']; ?>" alt="" class="" width="184px" height="184px">
				</figure>
				<h3><?php echo $dtpost['nama']; ?></h3>	
			</div>

							<div class="clearfix visible-sm-block visible-xs-block"></div>
								<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-staff to-animate">
								<?php
                    $id=isset($_GET['id'])?$_GET['id']:'';
                    $ambildata= mysqli_query($koneksi,"select * from galery where id ='3'");
                    $dtpost= mysqli_fetch_array($ambildata);?>            
                  <figure>
				  <img src="admin/uploads/<?php echo $dtpost ['file']; ?>" alt="" class="" width="184px" height="184px">
				</figure>
				<h3><?php echo $dtpost['nama']; ?></h3>	
			</div>

							<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-staff to-animate">
													<?php
                    $id=isset($_GET['id'])?$_GET['id']:'';
                    $ambildata= mysqli_query($koneksi,"select * from galery where id ='4'");
                    $dtpost= mysqli_fetch_array($ambildata);?>            
                  <figure>
				  <img src="admin/uploads/<?php echo $dtpost ['file']; ?>" alt="" class="" width="184px" height="184px">
				</figure>
				<h3><?php echo $dtpost['nama']; ?></h3>	
			</div>
													<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-staff to-animate">
													<?php
                    $id=isset($_GET['id'])?$_GET['id']:'';
                    $ambildata= mysqli_query($koneksi,"select * from galery where id ='5'");
                    $dtpost= mysqli_fetch_array($ambildata);?>            
                  <figure>
				  <img src="admin/uploads/<?php echo $dtpost ['file']; ?>" alt="" class="" width="184px" height="184px">
				</figure>
				<h3><?php echo $dtpost['nama']; ?></h3>	
			</div>
							<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-staff to-animate">
												<?php
                    $id=isset($_GET['id'])?$_GET['id']:'';
                    $ambildata= mysqli_query($koneksi,"select * from galery where id ='6'");
                    $dtpost= mysqli_fetch_array($ambildata);?>            
                  <figure>
				  <img src="admin/uploads/<?php echo $dtpost ['file']; ?>" alt="" class="" width="184px" height="184px">
				</figure>
				<h3><?php echo $dtpost['nama']; ?></h3>	
			</div>
							<div class="clearfix visible-sm-block visible-xs-block"></div>
							<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-staff to-animate">
													<?php
                    $id=isset($_GET['id'])?$_GET['id']:'';
                    $ambildata= mysqli_query($koneksi,"select * from galery where id ='7'");
                    $dtpost= mysqli_fetch_array($ambildata);?>            
                  <figure>
				  <img src="admin/uploads/<?php echo $dtpost ['file']; ?>" alt="" class="" width="184px" height="184px">
				</figure>
				<h3><?php echo $dtpost['nama']; ?></h3>	
			</div>
							<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-staff to-animate">
												<?php
                    $id=isset($_GET['id'])?$_GET['id']:'';
                    $ambildata= mysqli_query($koneksi,"select * from galery where id ='8'");
                    $dtpost= mysqli_fetch_array($ambildata);?>            
                  <figure>
				  <img src="admin/uploads/<?php echo $dtpost ['file']; ?>" alt="" class="" width="184px" height="184px">
				</figure>
				<h3><?php echo $dtpost['nama']; ?></h3>	
			</div>
					<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-staff to-animate">
												<?php
                    $id=isset($_GET['id'])?$_GET['id']:'';
                    $ambildata= mysqli_query($koneksi,"select * from galery where id ='9'");
                    $dtpost= mysqli_fetch_array($ambildata);?>            
                  <figure>
				  <img src="admin/uploads/<?php echo $dtpost ['file']; ?>" alt="" class="" width="184px" height="184px">
				</figure>
				<h3><?php echo $dtpost['nama']; ?></h3>	
			</div>
						
							<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-staff to-animate">
													<?php
                    $id=isset($_GET['id'])?$_GET['id']:'';
                    $ambildata= mysqli_query($koneksi,"select * from galery where id ='10'");
                    $dtpost= mysqli_fetch_array($ambildata);?>            
                  <figure>
				  <img src="admin/uploads/<?php echo $dtpost ['file']; ?>" alt="" class="" width="184px" height="184px">
				</figure>
				<h3><?php echo $dtpost['nama']; ?></h3>	
			</div>
							<div class="clearfix visible-sm-block visible-xs-block"></div>
							<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-staff to-animate">
													<?php
                    $id=isset($_GET['id'])?$_GET['id']:'';
                    $ambildata= mysqli_query($koneksi,"select * from galery where id ='11'");
                    $dtpost= mysqli_fetch_array($ambildata);?>            
                  <figure>
				  <img src="admin/uploads/<?php echo $dtpost ['file']; ?>" alt="" class="" width="184px" height="184px">
				</figure>
				<h3><?php echo $dtpost['nama']; ?></h3>	
			</div>
							<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-staff to-animate">
												<?php
                    $id=isset($_GET['id'])?$_GET['id']:'';
                    $ambildata= mysqli_query($koneksi,"select * from galery where id ='12'");
                    $dtpost= mysqli_fetch_array($ambildata);?>            
                  <figure>
				  <img src="admin/uploads/<?php echo $dtpost ['file']; ?>" alt="" class="" width="184px" height="184px">
				</figure>
				<h3><?php echo $dtpost['nama']; ?></h3>	
			</div>
													<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-staff to-animate">
													<?php
                    $id=isset($_GET['id'])?$_GET['id']:'';
                    $ambildata= mysqli_query($koneksi,"select * from galery where id ='13'");
                    $dtpost= mysqli_fetch_array($ambildata);?>            
                  <figure>
				  <img src="admin/uploads/<?php echo $dtpost ['file']; ?>" alt="" class="" width="184px" height="184px">
				</figure>
				<h3><?php echo $dtpost['nama']; ?></h3>	
			</div>
							<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-staff to-animate">
													<?php
                    $id=isset($_GET['id'])?$_GET['id']:'';
                    $ambildata= mysqli_query($koneksi,"select * from galery where id ='14'");
                    $dtpost= mysqli_fetch_array($ambildata);?>            
                  <figure>
				  <img src="admin/uploads/<?php echo $dtpost ['file']; ?>" alt="" class="" width="184px" height="184px">
				</figure>
				<h3><?php echo $dtpost['nama']; ?></h3>	
			</div>
							<div class="clearfix visible-sm-block visible-xs-block"></div>
							<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-staff to-animate">
													<?php
                    $id=isset($_GET['id'])?$_GET['id']:'';
                    $ambildata= mysqli_query($koneksi,"select * from galery where id ='15'");
                    $dtpost= mysqli_fetch_array($ambildata);?>            
                  <figure>
				  <img src="admin/uploads/<?php echo $dtpost ['file']; ?>" alt="" class="" width="184px" height="184px">
				</figure>
				<h3><?php echo $dtpost['nama']; ?></h3>	
			</div>
							<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-staff to-animate">
													<?php
                    $id=isset($_GET['id'])?$_GET['id']:'';
                    $ambildata= mysqli_query($koneksi,"select * from galery where id ='16'");
                    $dtpost= mysqli_fetch_array($ambildata);?>            
                  <figure>
				  <img src="admin/uploads/<?php echo $dtpost ['file']; ?>" alt="" class="" width="184px" height="184px">
				</figure>
				<h3><?php echo $dtpost['nama']; ?></h3>	
			</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		

	<footer id="fh5co-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 text-center">
					<p>&copy; Website Desa Pariwisata Kasongan. <br>Created by <a  target="_blank">Ahmad nur fauzi</a></p>
				</div>
			</div>
		</div>
	</footer>


	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Main JS -->
	<script src="js/main.js"></script>

	
	</body>
</html>
