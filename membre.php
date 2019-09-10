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
   $req = $cnx->prepare("select id_utilisateur, Email,Prenom, Nom, Password from utilisateur where Email=:email AND Password= :password");
   $req->execute(array("email" => $Email, "password" => $Password));
       $donnee = $req->fetch();
       if($donnee["Email"] == $Email && $donnee["Password"] == $Password)
       {
  //  header("Location:addarticle.php");
  $_SESSION["email"] = $donnee["Email"];
  $_SESSION["password"] = $donnee["Password"];
  $_SESSION["id_user"] = $donnee["id_utilisateur"];
  $_SESSION["membre"]=true;
  $_SESSION["nom"]=$donnee["Nom"];
  $_SESSION["prenom"]=$donnee["Prenom"];
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
<html>
   <header>
       <meta charset="utf-8">
       <title>welcome summer</title>
       <link rel="stylesheet" href="css/bootstrap.min.css">
       <link type="text/css" rel="stylesheet" href="style.css">
   </header>
   <body>
       <nav class="navbar navbar-expand-lg navbar-light bg-light ">
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
 </button>
           <ul class="navbar-nav mx-auto">
               <li class="nav-item mr-xl-3"><a class="nav-link" href="addarticle.php" style="color:#FF007F">Ajouter un article</a></li>
  <li class="nav-item  mr-xm-2"><a class="nav-link" href="home.php" id="a" style="color:black">HOME</a></li>
               <li class="nav-item mr-xl-2"><a class="nav-link" href="beach.php" id="b" style="color:black">BEACH</a></li>
                   <li class="nav-item mr-xl-1"><a class="nav-link" href="hotel.php" id="c" style="color:black">HOTELS</a></li>
                   <li class="nav-item submenu dropdown">
                     <a href="lieux.php" class="nav-link  mr-xm-1" id="d" style="color:black" >LIEUX</a>
                   </li>

          </ul>
                <form class="form-inline  my-2 my-lg-0 ml-auto">
                   <label><?php

echo $_SESSION['nom'];
echo $_SESSION['prenom']

                       ?></label>
                          <a href="deconnexion.php" class="btn btn-success btn-xl active" role="button" aria-pressed="true">Deconnexion</a>
               </form>
       </nav>


   </body>
</html>
