<?php
    if(isset($_POST["texte"]))
    {
$texte = $_POST["texte"];
    }
$date = date("Y-m-d");
require("getcategorie.php");
//$cnx2 = new PDO("mysql:host=localhost; dbname=blog; charset=utf8", "root", "");
if(isset($_POST["enregistrer"]))
{
//$image=$_FILES["image"];
$req_com = $cnx->prepare("insert into commentaires (id_article, Text, id_utilisateur, date_Ajoute)
values (:id_article, :Text, :id_utilisateur,  :date_Ajoute)");
$req_com->execute(array(
    "id_article" =>$_SESSION["id_article"],
    "Text" => $texte,
    "id_utilisateur" => $donnee["id_utilisateur"],
      "date_Ajoute" => $date
));
    //echo $_SESSION["id_article"].$texte.$date.$donnee["id_utilisateur"];
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Actualité</title>
               <link rel="stylesheet" href="css/bootstrap.min.css">
            <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-filestyle.min.js"></script>
    </head>
    <body>
                        <?php
require("actualite.php");
$req2 = $cnx->prepare("select Titre, Contenu, image from articles where id = :idy");
$req2->execute(array("idy" => $_SESSION["id_article"]));
$donnee2 = $req2->fetch();
if(isset($_SESSION["auth"]) && $_SESSION["auth"])
{
               $req = $cnx->prepare("select id_utilisateur, Nom, Prenom, Email, Password, NomUtilisateur from utilisateur where Email= :email AND Password = :password");
    $req->execute(array("email" => $_SESSION["email"], "Password" => $_SESSION["password"]));
        $donnee = $req->fetch();
        if($donnee["Email"] !== $_SESSION["email"] || $donnee["Password"] !== $_SESSION["password"])
            {
                $_SESSION["membre"] = false;
            }
?>
            <nav class="navbar navbar-expand-lg navbar-light bg-light ">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
                 <form class="form-inline  my-2 my-lg-0 ml-auto">
                    <label><?php
                        if($donnee["Email"] === $_SESSION["email"] && $donnee["Password"] === $_SESSION["password"])
                            //else
                        {
                            $_SESSION["membre"]=true;
                            echo $donnee["Prenom"]." ".$donnee["Nom"];

                        }

                        ?>

                     </label>

                          <a href="deconnexion.php" class="btn btn-success btn-xl active" role="button" aria-pressed="true">Deconnexion</a>

                </form>
        </nav>
         <?php }?>
        <h2><?php echo $donnee2["Titre"]; ?></h2>
        <img src = <?php echo ("images/".$donnee2["image"]);?>>
        <p><?php  echo $donnee2["Contenu"]; ?></p>
        <form  style="color: #757575;" method="post" class="form" enctype="multipart/form-data">
             <p class="h4 mb-4">Commentaire</p>
 <p class ="h6 mb-4"><?php
        if(!($_SESSION["membre"]) || !isset($_SESSION["auth"]) || !$_SESSION["auth"] )
            {
                echo "Vous ne pouvez pas commenter sans avoir un compte <a href='enregistrer.php' >S'inscrire</a> ou <a href='home.php' >Se connecter</a>" ;
           // $_SESSION["echec_auth"] = true;

        }

        ?></p>

            <?php if(isset($_SESSION["auth"]) && $_SESSION["auth"]){
    ?>

                    <div class="md-form col-xl-4 article">
                        <label for="materialRegisterFormLastName">Commentaire</label>
                        <textarea class="form-control" rows=10 cols=20 name="texte" required></textarea>
                    </div>
            <input type="submit" name="enregistrer" class="btn btn-sub btn-success" value="Enregistrer">
        </form>
        <?php }?>
    </body>
</html>
