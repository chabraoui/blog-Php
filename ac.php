
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>Contact Us</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"  rel="stylesheet">
	</head>
	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="home.css">
</head>

<body>

	<!--================ Start Header Menu Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="home.php"><img src="img/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item  mr-xm-2"><a class="nav-link" href="home.php" id="a"style="color:#FF007F">HOME</a></li>
							<li class="nav-item mr-xl-2"><a class="nav-link" href="beach.php" id="b">BEACH</a></li>
              		<li class="nav-item mr-xl-1"><a class="nav-link" href="hotel.php" id="c">HOTELS</a></li>
                  <li class="nav-item submenu dropdown">
    								<a href="lieux.php" class="nav-link  mr-xm-1" id="d">LIEUX</a>
    							</li>

              <li class="nav-item submenu dropdown">
                <a href="contact.php" class="nav-link mr-xl-1" id="g">CONTACT</a>

              </li>
							<li class="nav-item mr-xl-2"><a class="nav-link" href="enregistrer.php" id="h">S'ENREGISTRER</a></li>
              </li>
						</ul>

            <div class="form-inline my-2 my-lg-0">
     <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
     <button class="btn btn-outline-success " type="submit" id="uua">Search</button>
   </div>
  <button class="btn btn-success" data-toggle="modal" data-target="#loginModale" id="az">Login</button>




		<div class="modal fade text-dark" id="loginModale">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title">Log In</h5>
		        <button class="close" data-dismiss="modal">
		          <span>&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <form method="post" action="membre.php">
		          <div class="form-group">
		            <label for="email">email</label>
		            <input type="text" class="form-control" name="email" placeholder="Enter your username">
		          </div>
		          <div class="form-group">
		            <label for="password">Password</label>
		            <input type="password" class="form-control" name="password" placeholder="Enter your password">
		          </div>
		          <input type="submit" value="Login" name="connexion" class="btn btn-block btn-brown">
		        </form>
		      </div>
		    </div>
		  </div>
		</div>


					</div>

				</div>
			</nav>

			<div class="search_input" id="search_input_box">
				<div class="container">
					<form class="d-flex justify-content-between">
						<input type="text" class="form-control" id="search_input" placeholder="Search Here">
						<button type="submit" class="btn"></button>
						<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
					</form>
				</div>
			</div>
		</div>
	</header>
	<!--================ End Header Menu Area =================-->

	<!--================ Start Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="banner_inner">
			<div class="container">
				<div class="row fullscreen d-flex align-items-center justify-content-center">
					<div class="banner_content">
						<h2>WELCOME SUMMER</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Home Banner Area =================-->

	<!--================ Start Feature Area =================-->
	<section class="feature-area section_gap_top">
		<div class="container">
			<div class="row align-items-end justify-content-left">
				<div class="col-lg-12">
					<div class="main_title">
						<p style="color:black">KEEPING YOU INFORMED</p>
						<h1 style="color:#006600">BEST BEACH IN THE NORTH OF MOROCCO</h1>
						<span class="title-widget-bg"></span>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- single-feature -->
				<div class="col-lg-4 col-md-6">
					<div class="single-feature">
						<div class="feature-details">
							<h5>NORTH:Dalia Beach</h5>

							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							</p>
							<a href="#" class="primary-btn mb-40">Read More</a>
						</div>
						<div class="card" style="width: 18rem;">
							<img class="card-img-top" src="img/Dalia_beach.jpg" alt="">
						</div>
					</div>
				</div>

				<!-- single-feature -->
				<div class="col-lg-4 col-md-6">
					<div class="single-feature">
						<div class="feature-details">
							<h5>NORTH:Belyounech Beach</h5>
							<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							</p>
							<a href="#" class="primary-btn mb-40">Read More</a>
						</div>
						<div class="card" style="width: 18rem;">
							<img class="card-img-top" src="img/AgSLljx.jpg" alt="">
						</div>
					</div>
				</div>
				<!-- single-feature -->
				<div class="col-lg-4 col-md-6">
					<div class="single-feature">
						<div class="feature-details">
							<h5>AL-HOCEIMA: Quemado Beach</h5>
							<p>
								Quemado Beach, c’est une jolie crique de sable fin, de riches fonds marins à découvrir.Cette plage est très appréciée, propre, équipée de jeux pour enfants,. Vous pourrez même y faire une balade en bateau ou kayak.
							</p>
							<a href="#" class="primary-btn mb-40">Read More</a>
						</div>
						<div class="card" style="width: 18rem;">
							<img class="card-img-top" src="img/w640.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Feature Area =================-->
	<section class="feature-area section_gap_top">
		<div class="container">
			<div class="row align-items-end justify-content-left">
				<div class="col-lg-12">
					<div class="main_title">
						<p style="color:black">KEEPING YOU INFORMED</p>
						<h1 style="color:#006600">BEST BEACH IN THE SOUTH OF MOROCCO</h1>
						<span class="title-widget-bg"></span>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- single-feature -->
				<div class="col-lg-4 col-md-6">
					<div class="single-feature">
						<div class="feature-details">
							<h5>SOUTH:Sidi Bouzid Beach</h5>

							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							</p>
							<a href="#" class="primary-btn mb-40">Read More</a>
						</div>
						<div class="card" style="width: 18rem;">
							<img class="card-img-top" src="img/sidibouzid.jpg" alt="">
						</div>
					</div>
				</div>

				<!-- single-feature -->
				<div class="col-lg-4 col-md-6">
					<div class="single-feature">
						<div class="feature-details">
							<h5>SOUTH:Imsoune Beach</h5>
							<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							</p>
							<a href="#" class="primary-btn mb-40">Read More</a>
						</div>
						<div class="card" style="width: 18rem;">
							<img class="card-img-top" src="img/imswan.jpg" alt="">
						</div>
					</div>
				</div>
				<!-- single-feature -->
				<div class="col-lg-4 col-md-6">
					<div class="single-feature">
						<div class="feature-details">
							<h5>AGADIR: Taghazout Beach</h5>
						<p>							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
</p>
							<a href="#" class="primary-btn mb-40">Read More</a>
						</div>
						<div class="card" style="width: 18rem;">
							<img class="card-img-top" src="img/tAGHAZOUT.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ Start CTA Area =================-->

	<!--================ End CTA Area =================-->

	<!--================ Start Trip Package Area =================-->
	<section class="package-area section_gap_top">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="ol-lg-12">
					<div class="main_title">
						<p>KEEPING YOU INFORMED</p>
						<h1>Famous Hotel In MOROCCO</h1>
						<span class="title-widget-bg"></span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-package">
						<div class="thumb">
							<img class="img-fluid" src="img/mazagan.png" alt="">
						</div>
						<p class="date"><span>18</span> <br> December</p>
						<div class="meta-top d-flex">
							<p><span class="fa fa-location-arrow"></span> EL-JADIDA</p>
							<p class="ml-20"><span class="fa fa-calendar"></span> 5 days 6 nights</p>
						</div>
						<h4>Mazagan Beach & Golf Resort</h4>
						<p>
Installé dans un complexe moderne de style mauresque, cet hôtel balnéaire haut de gamme avec golf se trouve au bord de l'océan Atlantique, à 104 km de l'aéroport international de Casablanca.
						<a href="#" class="primary-btn">Read More</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-package">
						<div class="thumb">
							<img class="img-fluid" src="img/mansouria.jpg" alt="">
						</div>
						<p class="date"><span>18</span> <br> December</p>
						<div class="meta-top d-flex">
							<p><span class="fa fa-location-arrow"></span> MARRAKECH</p>
							<p class="ml-20"><span class="fa fa-calendar"></span> 5 days 6 nights</p>
						</div>
						<h4>Royal Mansour
						</h4>
						<p>
							Cet hôtel haut de gamme situé dans la médina se trouve à 14 minutes à pied de la place Jemaa el-Fna et à 2 km du jardin Majorelle.
						</p>
						<a href="#" class="primary-btn">Read More</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-package">
						<div class="thumb">
							<img class="img-fluid" src="img/_DSCssf6616.jpg" alt="">
						</div>
						<p class="date"><span>18</span> <br> December</p>
						<div class="meta-top d-flex">
							<p><span class="fa fa-location-arrow"></span> RABAT</p>
							<p class="ml-20"><span class="fa fa-calendar"></span> 5 days 6 nights</p>
						</div>
						<h4>Dawliz Resort & Spa</h4>
						<p>
Situé le long du fleuve Bouregreg, cet hôtel chic et moderne se trouve à 5 minutes de marche de la gare la plus proche. Il est aussi à 2 km de la plage de Salé et de la tour Hassan datant du XIIe siècle.
						</p>
						<a href="#" class="primary-btn">Read More</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Trip Package Area =================-->

	<!--================ Start Popular Places Area =================-->
	<section class="popular-places-area section_gap_bottom">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-lg-12">
					<div class="main_title">
						<p>THE PARADIS OF MORROCO</p>
						<h1>Famous Places To Visit In  MOROCCO</h1>
						<span class="title-widget-bg"></span>
					</div>
				</div>
			</div>
		</div>
		<div class="popular-places-slider owl-carousel">
			<a href="img/LEGZIRA.jpg" class="single-popular-places d-block img-gal">
				<div class="popular-places-img">
					<img src="img/LEGZIRA.jpg" alt="">
				</div>
				<div class="popular-places-text">

					<h4>
						This is MOROCCO
					</h4>
				</div>
			</a>
			<a href="img/ouzoud.jpg" class="single-popular-places d-block img-gal" >
				<div class="popular-places-img">
					<img src="img/ouzoud.jpg" alt="">
				</div>
				<div class="popular-places-text">

					<h4>
					This is MOROCCO
					</h4>
				</div>
			</a>
			<a href="img/merzouga.jpg" class="single-popular-places d-block img-gal">
				<div class="popular-places-img">
					<img src="img/merzouga.jpg" alt="">
				</div>
				<div class="popular-places-text">

					<h4>
						This is MOROCCO
					</h4>
				</div>
			</a>
			<a href="img/akchour.png" class="single-popular-places d-block img-gal">
				<div class="popular-places-img">
					<img src="img/akchour.png" alt="">
				</div>
				<div class="popular-places-text">

					<h4>
				This is MOROCCO
					</h4>
				</div>
			</a>
		</div>
	</section>
	<!--================ End Popular Places Area =================-->

	<!--================Team Area =================-->

	<!--================End Team Area =================-->

	<!--================ Start CTA Area =================-->
	<!--================ End CTA Area =================-->

	<!--================ Start Testimonials Area =================-->
	<section class="testimonials-area section_gap">
		<div class="container">
			<div class="testi-slider owl-carousel" data-slider-id="1">
				<div class="item">
					<div class="testi-item">
						<img src="img/quote.png" alt="">
						<h4>Fanny Spencer</h4>
						<ul class="list">
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
						</ul>
						<div class="wow fadeIn" data-wow-duration="1s">
							<p>
								As conscious traveling Paup ers we must always be oncerned about our dear <br>
								Mother Earth. If you think about it, you travel across her faceand She is the host <br>
								to your journey.
							</p>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="testi-item">
						<img src="img/quote.png" alt="">
						<h4>Fanny Spencer</h4>
						<ul class="list">
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
						</ul>
						<div class="wow fadeIn" data-wow-duration="1s">
							<p>
								As conscious traveling Paup ers we must always be oncerned about our dear <br>
								Mother Earth. If you think about it, you travel across her faceand She is the host <br>
								to your journey.
							</p>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="testi-item">
						<img src="img/quote.png" alt="">
						<h4>Fanny Spencer</h4>
						<ul class="list">
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
						</ul>
						<div class="wow fadeIn" data-wow-duration="1s">
							<p>
								As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about it, you travel
								across her face <br> and She is the host to your journey.
							</p>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="testi-item">
						<img src="img/quote.png" alt="">
						<h4>Fanny Spencer</h4>
						<ul class="list">
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
						</ul>
						<div class="wow fadeIn" data-wow-duration="1s">
							<p>
								As conscious traveling Paup ers we must always be oncerned about our dear <br>
								Mother Earth. If you think about it, you travel across her faceand She is the host <br>
								to your journey.
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="owl-thumbs d-flex justify-content-center" data-slider-id="1">
				<div class="owl-thumb-item">
					<div>
						<img class="img-fluid rounded-circle" src="img/testimonial/t1.jpg" alt="">
					</div>
					<div class="overlay overlay-grad "></div>
				</div>
				<div class="owl-thumb-item">
					<div>
						<img class="img-fluid rounded-circle" src="img/testimonial/t2.jpg" alt="">
					</div>
					<div class="overlay overlay-grad"></div>
				</div>
				<div class="owl-thumb-item">
					<div>
						<img class="img-fluid rounded-circle" src="img/testimonial/t3.jpg" alt="">
					</div>
					<div class="overlay overlay-grad"></div>
				</div>
				<div class="owl-thumb-item">
					<div>
						<img class="img-fluid rounded-circle" src="img/testimonial/t4.jpg" alt="">
					</div>
					<div class="overlay overlay-grad"></div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Testimonials Area =================-->

	<!--================ Start Blog Area =================-->

	<!--================ End Blog Area =================-->

	<!--================  Start Footer Area =================-->
	<footer class="footer-area">
		<div class="footer_top section_gap_top">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<h5 class="footer_title">About Film</h5>
							<p class="about-text">Après avoir découvert une vieille console contenant un jeu vidéo dont ils n'avaient jamais entendu parler, quatre jeunes se retrouvent mystérieusement propulsés au coeur de la jungle de Jumanji, dans le corps de leurs avatars. Ils découvrent rapidement que l'on ne joue pas à Jumanji.</p>
						</div>
					</div>
					<div class="col-lg-2 col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<h5 class="footer_title">Navigation Links</h5>
							<div class="row">
								<div class="col-5">
									<ul class="list">
										<li><a href="#">Home</a></li>
										<li><a href="#">Features</a></li>
										<li><a href="#">Services</a></li>
										<li><a href="#">Portfolio</a></li>
									</ul>
								</div>
								<div class="col-5">
									<ul class="list">
										<li><a href="#">Team</a></li>
										<li><a href="#">Pricing</a></li>
										<li><a href="#">Blog</a></li>
										<li><a href="#">contact</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<h5>Newsletter</h5>
							<p>For business professionals caught between high OEM price and mediocre print and graphic output, </p>
							<div class="footer-newsletter" id="mc_embed_signup">
								<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
								 method="get" class="form-inline">
									<div class="d-flex flex-row">
										<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
										 required="" type="email">
										<button class="click-btn btn btn-default"><span class="lnr lnr-location" aria-hidden="true"></span></button>
										<div style="position: absolute; left: -5000px;">
											<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
										</div>
									</div>
									<div class="info"></div>
								</form>
							</div>
						</div>
					</div>
					<div class="col-lg-3  col-md-6 col-sm-6">
						<div class="single-footer-widget mail-chimp">
							<h5 class="mb-20"> Distribution </h5>
							<ul class="instafeed d-flex flex-wrap">
								<li><img src="img/banner/download1.jpg" alt=""></li>
								<li><img src="img/banner/download2.jpg" alt=""></li>
								<li><img src="img/banner/download3.jpg" alt=""></li>
								<li><img src="img/banner/download4.jpg" alt=""></li>
								<li><img src="img/banner/download5.jpg" alt=""></li>
								<li><img src="img/download.jpg" alt=""></li>
								<li><img src="img/images1.jpg" alt=""></li>
								<li><img src="img/images2.jpg" alt=""></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-12">
						<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fab fa-gratipay" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">YOUNES-CH</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
					</div>
					<div class="col-lg-6 col-md-12 text-right">
						<div class="social-icons">
							<a href="#"><i class="fab fa-facebook-f"style="color:white"></i></a>
							<a href="#">    <i class="fab fa-twitter"style="color:white"></i></a>
							<a href="#"><i class="fab fa-dribbble" style="color:white"></i></a>
							<a href="#"><i class="fab fa-behance" style="color:white"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--================ End Footer Area =================-->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="js/owl-carousel-thumb.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/mail-script.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/theme.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
		crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
		crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
			crossorigin="anonymous"></script>
</body>

</html>
