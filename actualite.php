<?php
session_start();
   require("getactualite.php");
   while($donnee = $req->fetch())
   {
?>
<!DOCTYPE html>
<html>
   <head>
       <meta charset="utf-8">
       <title>Actualité</title>
   </head>
   <body>
       <h2><?php echo $donnee["Titre"]; ?></h2>
       <img src = <?php echo ("images/".$donnee["image"]);?>>
       <a href=<?php echo "commentaire.php?id=".$donnee["id"]?>>Lire la suite</a>
       <?php
       $_SESSION["id_article"] = $donnee["id"];
   }
       ?>
   </body>
</html>
