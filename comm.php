
<!DOCTYPE html>
<html>

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
 <!-- main css -->
 <link rel="stylesheet" href="css/style.css">
 <link rel="stylesheet" href="home.css">
</head>

    <body>
        <h1 style="color:pink">WELCOME SUMMER</h1>


<?php
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=vlog;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// On récupère les 5 derniers billets
$req = $bdd->query("SELECT id, Titre, Contenu, id_utilisateur, id_cat, image FROM articles " );

while ($donnees = $req->fetch())
{
?>
<form  style="color: #757575;" method="post" class="form"  enctype="multipart/form-data">
<div class="news">
    <h3>
        <?php echo htmlspecialchars($donnees['Titre']); ?>

    </h3>
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="<?php echo htmlspecialchars("images/".$donnees['image']); ?>" alt="erreur">
    </div>
    <p>
    <?php
    // On affiche le contenu du billet
    echo nl2br(htmlspecialchars($donnees['Contenu']));
    ?>
    <br />
    <div class="gg">
    <em><a href="comm.php?articles=<?php echo $donnees['id']; ?>">Commentaires</a></em>
      <textarea class="form-control" rows=10 cols=20 name="texte" required></textarea>
        <input type="submit" name="enregistrer" class="btn btn-sub btn-success" value="Enregistrer">
      </div>
    </p>
</div>
</form>
<?php
} // Fin de la boucle des billets
$req->closeCursor();
?>
</body>
</html>
