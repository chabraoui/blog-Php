
<?php
session_start();
if(isset($_POST["email"]))
{
$Email = $_POST["email"];
}
if(isset($_POST["password"]))
{
$Password = $_POST["password"];
}
    try{
        $cnx = new PDO("mysql:host=localhost; dbname=vlog; charset=utf8", "root", "");
    }
    catch(Exception $e)
    {
        die("Erreur: ".$e->getMessage());
    }
		if(isset($_POST["connexion"]))
	  {
	  $req = $cnx->prepare("select id_utilisateur, Email,Prenom, Nom, Password, Admin from utilisateur where Email=:email");
	  $req->execute(array("email" => $Email));
	 		 $donnee = $req->fetch();
	 		 if($donnee["Password"] == $Password)
	 		 {
	 //  header("Location:addarticle.php");
	 $_SESSION["email"] = $donnee["Email"];
	 $_SESSION["password"] = $donnee["Password"];
	 $_SESSION["id_user"] = $donnee["id_utilisateur"];
	 $_SESSION["membre"]=true;
	 $_SESSION["nom"]=$donnee["Nom"];
	 $_SESSION["prenom"]=$donnee["Prenom"];
   $_SESSION["Admin"]=$donnee["Admin"];
	 		 }
	 		else
	 		 {
	 				$_SESSION["membre"] = false;
	 				 echo "E-mail ou mot de passe erroné";
	 				 exit;
	 		 }
	  }

?>




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
					<a class="navbar-brand logo_h" href="home.php"><img src="img/logo2.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->

					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
              <?php
              if( isset( $_SESSION["membre"]) &&  $_SESSION['membre']!==false && $_SESSION["Admin"]==1) {
              ?>
     <li class="nav-item  mr-xm-2"><a class="nav-link" href="mypage.php">MyPage</a></li>
   <?php } ?>
							<li class="nav-item  mr-xm-2"><a class="nav-link" href="home.php" id="a"style="color:#FF007F">HOME</a></li>
							<li class="nav-item mr-xl-2"><a class="nav-link" href="beach.php" id="b" >BEACH</a></li>
              		<li class="nav-item mr-xl-1"><a class="nav-link" href="hotel.php" id="c">HOTELS</a></li>
                  <li class="nav-item submenu dropdown">
    								<a href="lieux.php" class="nav-link  mr-xm-1" id="d">LIEUX</a>
    							</li>


                  <li>
                    <?php
                    if(isset($_SESSION['membre']) && $_SESSION['membre']!==false ){?>
                  <li class="nav-item mr-xl-2"><a class="nav-link" href="addarticle.php" id="k"><?php echo "ADD_ARTICLE" ?></a></li>
                  <?php }?>

                  </li>


<li>
									<?php
									if(!isset($_SESSION['membre']) || $_SESSION['membre']==false){?>
							<li class="nav-item mr-xl-2"><a class="nav-link" href="enregistrer.php" id="h"><?php echo "ENREGISTRER" ?></a></li>
								<?php }?>
								</li>
              </li>
						</ul>

            <div class="form-inline my-2 my-lg-0">
     <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
     <button class="btn btn-outline-success " type="submit" id="uua">Search</button>
   </div>


<div class="rrtt">




	 <?php if(!isset($_SESSION['membre']) || $_SESSION['membre']==false){ ?>
		 <button class="btn btn-success" data-toggle="modal" data-target="#loginModale" id="az"> login</button>
	 <?php } else { ?>
		 <form class="form-inline  my-2 my-lg-0 ml-auto">
				<label> <?php if (isset($_SESSION['nom'])) echo $_SESSION['nom']; ?> </label>
				<a href="deconnexion.php" class="btn btn-success btn-xl active" role="button" aria-pressed="true">Deconnexion</a>
			</form>
	 <?php } ?>

</div>
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



		        <form method="post" action=".">
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

				</div>
			</div>
		</div>
	</section>
	<!--================ End Home Banner Area =================-->

	<!--================ Start Feature Area =================-->

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
