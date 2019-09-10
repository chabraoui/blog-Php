<?php
    session_start();
    try{
        $cnx = new PDO("mysql:host=localhost; dbname=blog; charset=utf8", "root", "");
    }
    catch(Exception $e)
    {
        die("Erreur: ".$e->getMessage());
    }

               $req = $cnx->prepare("select id_utilisateur, nom_utilisateur, mot_de_passe, prenom, nom from utilisateurs where nom_utilisateur= :username AND mot_de_passe = :password");
    $req->execute(array("username" => $_SESSION["username"], "password" => $_SESSION["password"]));
        $donnee = $req->fetch();
        if($donnee["nom_utilisateur"] !== $_SESSION["username"] || $donnee["mot_de_passe"] !== $_SESSION["password"])
            {
                $_SESSION["echec_auth"] = false;
                //header("Location: /projetBlog/connexion.php");
                //exit;
            }
?>
<?php
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
$date = date("Y-m-d");
    $msg="";



require("getCategorie.php");
if(isset($_POST["enregistrer"]))
{
//$image=$_FILES["image"];
    $cible = "images/".basename($_FILES["image"]["name"]);
$image_nom = $_FILES["image"]["name"];
$image_tmp = $_FILES["image"]["tmp_name"];
$req_art = $cnx->prepare("insert into articles (titre, contenu, id_utilisateur, id_categorie, date_ajout, image)
values(:titre, :contenu, :id_utilisateur, :id_categorie, :date_ajout, :img");
$req_art->execute(array(
    "titre" => $titre,
    "contenu" => $contenu,
    "id_utilisateur" => intval($donnee["id_utilisateur"]),
    "id_categorie" => intval($categorie),
    "date_ajout" => $date,
    "img" => $image_nom
));
    echo "*********".move_uploaded_file($image_tmp, $cible)."***********";
    if(move_uploaded_file($image_tmp, $cible) === 1 )
    {
        $msg="l'image a été bien telechargée";
    }
    else
    {
        $msg="erreur de telechargement";
    }
}
echo $msg;
?>
<!DOCTYPE html>
<html>
    <header>
        <meta charset="utf-8">
        <title>Jardin pour tous</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
            <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-filestyle.min.js"></script>
            <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <link type="text/css" rel="stylesheet" href="styleMembre.css">
    </header>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
            <a class="navbar-brand pl-xl-3" href="accueil.php">Association Jardin Pour tous</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
                 <form class="form-inline  my-2 my-lg-0 ml-auto">
                    <label><?php
                        if($donnee["nom_utilisateur"] === $_SESSION["username"] && $donnee["mot_de_passe"] === $_SESSION["password"])
                            //else
                        {
                            $_SESSION["echec_auth"]=true;
                            echo $donnee["prenom"]." ".$donnee["nom"];

                        }


                        ?></label>
                           <a href="deconnexion.php" class="btn btn-success btn-xl active" role="button" aria-pressed="true">Deconnexion</a>

                </form>
        </nav>
        <div class="fond">
 <form  style="color: #757575;" method="post" class="form" method="post" enctype="multipart/form-data">
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
                   <!--<option><?php //while($reponse=$req->fetch()){echo $reponse["nom_categorie"];}?> </option>!-->
                    <option selected>Selectionner la catégorie d'article</option>
                    <?php
                        while($reponse=$req->fetch())
                        {
                            echo "<option value = '".$reponse["id_categorie"]."'>";
                              echo $reponse["nom_categorie"];
                            echo "</option>";
                        }
                    ?>

                </select>
            <input type="submit" name="enregistrer" class="btn btn-sub btn-success" value="Enregistrer">
        </form>
            </div>
    </body>

</html>
