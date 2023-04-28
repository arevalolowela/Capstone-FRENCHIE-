<!DOCTYPE html>
<html lang="en">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width= device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
	<!-- font awesome cdn -->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
	<!-- jquery cdn -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js"></script>

    <title>Frenchie</title>
        <link rel="manifest" href="manifest.json">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
      /*google font*/
		@import url('https://fonts.googleapis.com/css?family=Poppins:400,700,800,900&display=swap');

		@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Poppins:wght@500&display=swap');
		* {
			font-family: 'Montserrat', sans-serif;
		}
		h2{
			font-family: 'Libre Baskerville', serif;
		}
		body {
			background: #f5b5a2;
		}
		.section-padding {
			padding: 100px 0;
		}
		.carousel-item {
			height: 100vh;
			min-height: 300px;
		}
		.carousel-caption {
			bottom: 220px;
			z-index: 2;
		}
		.carousel-caption h5 {
			font-size: 45px;
			text-transform: uppercase;
			letter-spacing: 2px;
			margin-top: 25px;
			font-family: 'Libre Baskerville', serif;
		}
		.carousel-caption p {
			width: 60%;
			margin: auto;
			font-size: 18px;
			line-height: 1.9;
			font-family: 'Poppins', sans-serif;
		}
		.carousel-inner:before {
			content: '';
			position: absolute;
			width: 100%;
			height: 100%;
			top: 0;
			left: 0;
			background: rgba(0, 0, 0, 0.7);
			z-index: 1;
		}
		.navbar .getstarted {
			background: #106eea;
			margin-left: 30px;
			border-radius: 4px;
			font-weight: 400;
			color: #fff;
			text-decoration: none;
			padding: .5rem 1rem;
			line-height: 2.3;
		}
		.navbar-nav a {
			font-size: 15px;
			text-transform: uppercase;
			font-weight: 500;
		}
		.navbar-light .navbar-brand {
			color: #000;
			font-size: 25px;
			text-transform: uppercase;
			font-weight: bold;
			letter-spacing: 2px;
		}
		.navbar-light .navbar-brand:focus, .navbar-light .navbar-brand:hover {
			color: #000;
		}
		.navbar-light .navbar-nav .nav-link {
			color: #000;
		}
		.navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover {
			color: #000;
		}
		.w-100 {
			height: 100vh;
		}
		.navbar-toggler {
			padding: 1px 5px;
			font-size: 18px;
			line-height: 0.3;
			background: #fff;
		}
		.portfolio .card {
			box-shadow: 15px 15px 40px rgba(0, 0, 0, 0.15);
		}
		.team .card {
			box-shadow: 15px 15px 40px rgba(0, 0, 0, 0.15);
		}
		.services .card-body i {
			font-size: 50px;
		}
		.team .card-body i {
			font-size: 20px;
		}
		@media only screen and (min-width: 768px) and (max-width: 991px) {
			.carousel-caption {
				bottom: 370px;
			}
			.carousel-caption p {
				width: 100%;
			}
			.card {
				margin-bottom: 30px;
			}
			.img-area img {
				width: 100%;
			}
		}
		@media only screen and (max-width: 767px) {
			.navbar-nav {
				text-align: center;
			}
			.carousel-caption {
				bottom: 125px;
			}
			.carousel-caption h5 {
				font-size: 17px;
			}
			.carousel-caption a {
				padding: 10px 15px;
				font-size: 15px;
			}
			.carousel-caption p {
				width: 100%;
				line-height: 1.6;
				font-size: 12px;
			}
			.about-text {
				padding-top: 50px;
			}
			.about-text h2{
				padding-top: 50px;
			}
			.card {
				margin-bottom: 30px;
			}
		}

    </style>
    <script>
          if ("serviceWorker" in navigator){
            navigator.serviceWorker.register("sw.js").then(() => {
                console.log("[ServiceWorker**] - Registered");
            });
        }
    </script>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
		<div class="container">
			<a class="navbar-brand" href="#"><span class="text-danger">Frenchie</span>App</a></button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#about">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#services">Services</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#portfolio">Sample Products</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#team">Team</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="carousel slide" data-bs-ride="carousel" id="carouselExampleIndicators">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img alt="..." class="d-block w-100" src="assets/images/2.png">
				<div class="carousel-caption">
					<h5>Your Partner in Choosing your Unique Style</h5>
					<p>We will help you find your own and unique kind of style</p>
					<p><a class="btn btn-danger mt-3" href="pos/admin/">Login as Admin</a></p>
					<p><a class="btn btn-danger mt-3" href="pos/cashier/">Login as Promodizer</a></p>
				</div>
			</div>
	</div>
	</div><!-- about section starts -->
	<section class="about section-padding" id="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-12 col-12">
					<div class="about-img"><img alt="" class="img-fluid" src="assets/images/Frenchie.png"></div>
				</div>
				<div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
					<div class="about-text">
						<h2>The Frenchtoss Clothing Co. Inventory and POS Management System<br>
						"FRENCHIE"</h2>
						<p>The main objective of this project is to help the Frenchtoss Clothing Co. business to eliminate
							the problem regarding unorganized managing of their inventory. This system will help them
							create an easier way to manage and organized their inventory and generate reports without
							hassle.It also gives assurance to the owner that their product data is safe from being manipulated by
							unauthorized personnel. Using this system gave a lot of help specially to organizing the
							inventory of the business, it helps them track and create more diverse way of managing their
							business and handling their product.</p>
					</div>
				</div>
			</div>
		</div>
	</section><!-- about section Ends -->
	<!-- services section Starts -->
	<section class="services section-padding" id="services">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-header text-center pb-5">
						<h2>Our Services</h2>
						<p>The Following Services <br>
						is some special features of the Project</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-12 col-lg-4">
					<div class="card text-white text-center bg-dark pb-2">
						<div class="card-body">
							<i class="bi bi-laptop"></i>
							<h3 class="card-title">Responsive UI</h3>
							<p class="lead">One of the best aspects of this project is how dynamic and user-friendly it is. The Project can be used by those who are not IT or technologically inclined</p>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-12 col-lg-4">
					<div class="card text-white text-center bg-dark pb-2">
						<div class="card-body">
							<i class="bi bi-journal"></i>
							<h3 class="card-title">Organized Inventory</h3>
							<p class="lead">The primary purpose of this system is to make it easier for the selected beneficiary to manage both their inventory list and their Point of Sale Report</p>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-12 col-lg-4">
					<div class="card text-white text-center bg-dark pb-2">
						<div class="card-body">
							<i class="bi bi-intersect"></i>
							<h3 class="card-title">Generation of Reports</h3>
							<p class="lead">This covers the creation of the company's daily sales as well as crucial product details like the product code, price, date, and product quantity</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- services section Ends -->
	<!-- portfolio strats -->
	<section class="portfolio section-padding" id="portfolio">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-header text-center pb-5">
						<h2>Our Sample Products</h2>
						<p>The following images are just sample<br>
						Products of what we sell </p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-12 col-lg-4">
					<div class="card text-light text-center bg-white pb-2">
						<div class="card-body text-dark">
							<div class="img-area mb-4"><img alt="" class="img-fluid" src="pos/admin/assets/img/theme/product01.jpg"></div>
							<h3 class="card-title">Product Name: RAINA</h3>
							<p class="lead">8226-149-44</br>
							Colors: Violet, Mustard
						</div>
					</div>
				</div>
				<div class="col-12 col-md-12 col-lg-4">
					<div class="card text-light text-center bg-white pb-2">
						<div class="card-body text-dark">
							<div class="img-area mb-4"><img alt="" class="img-fluid" src="pos/admin/assets/img/theme/product02.jpg"></div>
							<h3 class="card-title">Product Name: QUYEN</h3>
							<p class="lead">1565-149-44</br>
							Colors: Mustard, Peach, Red
						</div>
					</div>
				</div>
				<div class="col-12 col-md-12 col-lg-4">
					<div class="card text-light text-center bg-white pb-2">
						<div class="card-body text-dark">
							<div class="img-area mb-4"><img alt="" class="img-fluid" src="pos/admin/assets/img/theme/product7.jpg"></div>
							<h3 class="card-title">Product Name:</br> ELISE</h3>
							<p class="lead">9036-349-34</br>
							Colors: Nude, Black, Navy Blue
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- portfolio ends -->
	<!-- team starts -->
	<section class="team section-padding" id="team">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-header text-center pb-5">
						<h2>Our Team</h2>
						<p>"Web development is difficult, only then it is fun to do. <br>
							You just have to set your standards. If it were to be easy, would anyone do it?" <br>
							― Olawale Daniel</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-6 col-lg-3">
					<div class="card text-center">
						<div class="card-body">
							<img alt="" class="img-fluid rounded-circle" src="assets/images/BSIT_AREVALO_LOWELA.jpg">
							<h3 class="card-title py-2">Lowela A. Arevalo</h3>
							<p class="card-text">Project Developer | Team Analytica</p><br><br><br>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-3">
					<div class="card text-center">
						<div class="card-body"><br><br>
							<h3 class="card-title py-2">Developer Quotes</h3>
							<p class="card-text">"Even though working on this project alone is extremely difficult, it has shown me just how much I can accomplish as a programmer. I feel proud of myself after doing this; all the hardships and weariness were worthwhile."</p><br><br>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-3">
					<div class="card text-center">
						<div class="card-body">
							<img alt="" class="img-fluid rounded-circle" src="assets/images/Sir Rey.jpeg">
							<h3 class="card-title py-2">Mr. Reynaldo G. Bautista Jr.</h3>
							<p class="card-text">Project Advisor | Team Analytica</p>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-3">
					<div class="card text-center">
						<div class="card-body"><br><br>
							<h3 class="card-title py-2">Project Advisor Quotes</h3>
							<p class="card-text">"Never get tired of the things that you want to achieve, just keep pushing forward even though it felt like you can't do it no more, success never comes on easy road"</p><br><br><br>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- team ends -->
	<!-- footer starts -->
	<footer class="bg-dark p-2 text-center">
		<div class="container">
			<p class="text-white">All Right Reserved By @Team Analytica</p>
		</div>
	</footer>
	<!-- footer ends -->
	
	<!-- scripts -->
	<!--/<script src="js/bootstrap.bundle.min.js"></script> -->
	<!-- bootstrap javascript cdn -->
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>