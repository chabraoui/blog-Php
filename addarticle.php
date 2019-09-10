<?php
    session_start();
    try{
        $cnx = new PDO("mysql:host=localhost; dbname=vlog; charset=utf8", "root", "");
    }
    catch(Exception $e)
    {
        die("Erreur: ".$e->getMessage());
    }

$req = $cnx->prepare("select id_utilisateur, Nom, Prenom, Email, Password, NomUtilisateur from utilisateur where Email=:email AND Password= :password");
$req->execute(array("email" => $_SESSION["email"], "password" => $_SESSION["password"]));
        $donnee = $req->fetch();
        if($donnee["Email"] == $_SESSION["email"] && $donnee["Password"] == $_SESSION["password"])
            {
                $_SESSION["membre"] = true;
            }
?>

<?php

try{
    $cnx = new PDO("mysql:host=localhost; dbname=vlog; charset=utf8", "root", "");
}
catch(Exception $e)
{
    die("Erreur: ".$e->getMessage());
}

 if(isset($_POST["titre"]))
    {
$titre = $_POST["titre"];
    }
    if(isset($_POST["contenu"]))
    {
$contenu = $_POST["contenu"];
    }
    if(isset($_POST["categorie"]))
    {
$categorie=$_POST["categorie"];
    }

    $msg="";
    require("getcategorie.php");
if(isset($_POST["enregistrer"]))
{
  $image_nom = $_FILES["image"]["name"];
  $image_tmp = $_FILES["image"]["tmp_name"];
  $imageExt = explode(".", $image_nom);
      $imageExtAct = strtolower(end($imageExt));
     $imageNomNouv = uniqid("", true).".".$imageExtAct;
$req_art = $cnx->prepare("insert into articles (Titre, Contenu, id_utilisateur, id_cat, image)
values(:titre, :contenu, :id_utilisateur, :id_cat, :image)");
$req_art->execute(array(
    "titre" => $titre,
    "contenu" => $contenu,
      "id_utilisateur" => intval($donnee["id_utilisateur"]),
    "id_cat" => intval($categorie),
    "image"=>$imageNomNouv

));

   $cible = "images/".basename($imageNomNouv);
   move_uploaded_file($image_tmp, $cible);
}

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>AAD ARTICLE</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
            <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-filestyle.min.js"></script>
            <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <link type="text/css" rel="stylesheet" href="style.css">
    </head>
    <body>



      <header class="header_area">
    		<div class="main_menu">
    			<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#A86565">
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
                <li class="nav-item  mr-xm-2"><a class="nav-link" href="home.php" id="a" style="color:white">HOME</a></li>
    	<li class="nav-item mr-xl-2"><a class="nav-link" href="beach.php" id="b"  style="color:white" >BEACH</a></li>
    									<li class="nav-item mr-xl-1"><a class="nav-link" href="hotel.php" id="c" style="color:white">HOTELS</a></li>
    									<li class="nav-item submenu dropdown">
    										<a class="nav-link  mr-xm-1" id="d" href="lieux.php" style="color:white">LIEUX</a>
    									</li>
                      <li>
                      	<?php
                      	if(isset($_SESSION['membre'])){?>
                      <li class="nav-item mr-xl-2"><a class="nav-link"  style="color:#FF007F" href="addarticle.php" id="k"><?php echo "ADD_ARTICLE" ?></a></li>
                      <?php }?>

                      </li>


    							<li class="nav-item submenu dropdown">

    								<?php
    								if(!isset($_SESSION['membre'])){
    										?>	<li class="nav-item mr-xl-2"><a class="nav-link"   href="enregistrer.php" id="f"> <?php echo "ENREGISTRER" ?></a></li>
    									<?php }?>
    							</li>


    						</ul>

    						<div class="form-inline my-2 my-lg-0">
    							<form class="form-inline  my-2 my-lg-0 ml-auto">
    								<label><?php
    								if(isset($_SESSION['nom'])){
    											 echo $_SESSION['nom'];
    										?></label>
    											 <a href="deconnexion.php" class="btn btn-success btn-xl active" role="button" aria-pressed="true">Deconnexion</a>
    									<?php	 }?>

    						</form>
    	 </div>
    					</div>
    				</div>
    			</nav>


    		</div>
    	</header>



        <div class="fond">
 <form  style="color: #757575;" method="post" class="form"  enctype="multipart/form-data">
             <p class="h4 mb-4">Article</p>
                  <!-- First name -->
                    <div class="md-form col-xl-4 article">
                        <label for="materialRegisterFormFirstName">Titre</label>
                        <input type="text" id="materialRegisterFormFirstName" class="form-control " aria-describedby="materialRegisterFormPasswordHelpBlock" name="titre" required>
                    </div>
                        <!-- Last name -->
                    <div class="md-form col-xl-4 article">
                        <label for="materialRegisterFormLastName">Contenu</label>
                        <textarea class="form-control" rows=20 cols=50 name="contenu" required></textarea>
                    </div>
         <div class="col-xs-4">
    	<div class="form-group">
	      <label class="control-label">File upload with different text</label>
            <input type="hidden" name="size" value="1000000">
	      <input type="file" name="image" class="filestyle" data-button-Text="Select a File" >
		</div>
     </div>
                <select class="browser-default custom-select" name= "categorie">

                    <option selected>Selectionner la catégorie d'article</option>
                    <?php

                        while($reponse=$req->fetch())
                        {
                            echo "<option value = '".$reponse["id_cat"]."'>";
                              echo $reponse["Nom_cat"];
                            echo "</option>";
                        }
                    ?>
                </select>
            <input type="submit" name="enregistrer" class="btn btn-sub btn-success" value="Enregistrer">
        </form>
            </div>
    </body>

</html>
