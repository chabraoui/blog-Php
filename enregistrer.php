<?php


try{
   $cnx = new PDO("mysql:host=localhost; dbname=vlog; charset=utf8", "root", "");
}
catch(Exception $e)
{
   die("Erreur: ".$e->getMessage());
}
if(isset($_POST["registre"]))
{
	$Email = $_POST["email"];
	$phone = $_POST["phone"];
	$Password = $_POST["password"];
	$Prenom = $_POST["prenom"];
	$NomUtilisateur = $_POST["username"];
	$Age = $_POST["age"];
	$Nom = $_POST["nom"];
	$Date_Ajoute = date("Y-m-d");






$req = $cnx->prepare("insert into utilisateur (Nom, Prenom, Age, NomUtilisateur,
Email, Password , Admin, Membre, Active, Date_Ajoute)
values(:Nom, :Prenom, :Age, :NomUtilisateur, :Email, :Password, :Admin, :Membre, :Active, :Date_Ajoute)");

$req->execute(array(
   "Nom" => $Nom,
   "Prenom" => $Prenom,
   "Age" => $Age,
   "NomUtilisateur" => $NomUtilisateur,
   "Email" => $Email,
   "Password" => $Password,
   "Admin" => 0,
   "Membre" => 1,
   "Active" => 0,
   "Date_Ajoute" => $Date_Ajoute,
));
header("Location:/www/blog/enregistrer.php");
exit;
}

 ?>





<!DOCTYPE html>
<html>
	<head>
		<title>TITRE DU PROJET</title>
	<meta charset="utf-8" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all" />
  <link rel="stylesheet" type="text/css" href="css/normalize.css" media="all" />
  <link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"  rel="stylesheet">
</head>


  <div class="main_menu">
    <nav class="navbar navbar-expand-lg navbar-light"style="background-color:#A86565">
      <div class="container">
	<a class="navbar-brand logo_h" href="home.php"><img src="img/logo2.png" alt=""></a>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
          <ul class="nav navbar-nav menu_nav ml-auto">
    <li class="nav-item mr-xl-2"><a class="nav-link" href="home.php" id="b" style="color:white">HOME</a></li>
            <li class="nav-item mr-xl-2"><a class="nav-link" href="beach.php" id="b" style="color:white">BEACH</a></li>
                <li class="nav-item mr-xl-1"><a class="nav-link" href="hotel.php" id="c" style="color:white">HOTELS</a></li>
                <li class="nav-item submenu dropdown">
                  <a href="lieux.php" class="nav-link  mr-xm-1" id="d" style="color:white">LIEUX</a>
                </li>


            <li class="nav-item mr-xl-3"><a class="nav-link" href="enregistrer.php" id="h" style="color:#FF007F">S'ENREGISTRER</a></li>
            </li>
          </ul>



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


<body>







  <!-- Material form register -->
  <div class="card">

      <h5 class="card-header info-color white-text text-center py-4" style="background-color:#1dcaff">
          <strong >Sign up</strong>
      </h5>

      <!--Card content-->
      <div class="card-body px-lg-5 pt-0">

          <!-- Form -->
          <form class="text-center" style="color: #757575;" method="post" >

              <div class="form-row">
                  <div class="col">
                      <!-- First name -->
                      <div class="md-form">

                          <label for="materialRegisterFormFirstName">First name</label>
                          <input type="text" id="materialRegisterFormFirstName" class="form-control" name="nom">
                      </div>
                  </div>
                  <div class="col">
                      <!-- Last name -->
                      <div class="md-form">
                        <label for="materialRegisterFormLastName">Last name</label>
                          <input type="text" id="materialRegisterFormLastName" class="form-control" name="prenom">

                      </div>
                  </div>
              </div>

              <!-- E-mail -->
              <div class="md-form mt-0">
                  <label for="materialRegisterFormEmail">E-mail</label>
                  <input type="email" id="materialRegisterFormEmail" class="form-control" name="email">

              </div>

							<div class="md-form mt-0">
									<label for="materialRegisterFormEmail">Age</label>
									<input type="number" id="materialRegisterFormEmail" class="form-control" name="age">

							</div>
							<div class="md-form mt-0">
									<label for="materialRegisterFormEmail">UserName</label>
									<input type="text" id="materialRegisterFormEmail" class="form-control" name="username">

							</div>
              <!-- Password -->
              <div class="md-form">
                <label for="materialRegisterFormPassword">Password</label>
                  <input type="password" id="materialRegisterFormPassword" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock" name="password">

                  <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                      At least 8 characters and 1 digit
                  </small>
              </div>

              <!-- Phone number -->
              <div class="md-form">
                <label for="materialRegisterFormPhone">Phone number</label>
                  <input type="tel" id="materialRegisterFormPhone" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock" name="phone">

                  <small id="materialRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
                      Optional - for two step authentication
                  </small>
              </div>

              <!-- Newsletter -->
              <div class="form-check">

                  <input type="checkbox" class="form-check-input" id="materialRegisterFormNewsletter">
  <label class="form-check-label" for="materialRegisterFormNewsletter">Subscribe to our newsletter</label>
              </div>

              <!-- Sign up button -->
              <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit" name="registre">Sign up</button>

               Social register
              <p>or sign up with:</p>

              <a type="button" class="btn-floating btn-fb btn-sm" style="background-color:#0369AE">
                  <i class="fab fa-facebook-f"style="color:white"></i>
              </a>
              <a type="button" class="btn-floating btn-tw btn-sm" style="background-color:#1dcaff">
                  <i class="fab fa-twitter"style="color:white"></i>
              </a>
              <a type="button" class="btn-floating btn-li btn-sm" style="background-color:#00aced">
                  <i class="fab fa-linkedin-in"style="color:white"></i>
              </a>
              <a type="button" class="btn-floating btn-git btn-sm" style="background-color:black">
                  <i class="fab fa-github" style="color:white"></i>
              </a>

              <hr>


              <p>By clicking
                  <em>Sign up</em> you agree to our
                  <a href="" target="_blank">terms of service</a>-->

          </form>


      </div>

  </div>
  Material form register
</body>
</html>
