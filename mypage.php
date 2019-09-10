
<?php
session_start();
    try{
        $cnx = new PDO("mysql:host=localhost; dbname=vlog; charset=utf8", "root", "");
    }
    catch(Exception $e)
    {
        die("Erreur: ".$e->getMessage());
    }
?>

<!doctype html>
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
	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="home1.css">
</head>
<body>

<div class="vb">
<h1 class="h4 mb-4" align="center">Suppression des utilisateurs</h1>
<table class="table table-bordered">
  <thead >
  <tr>
  <th>id_utilisateur</th>
    <th>Nom</th>
      <th>Prenom</th>
        <th>NomUtilisateur</th>
          <th>Email</th>
            <th>Age</th>
          </tr>
          </thead>
<?php

$cn = $cnx->query("select * from utilisateur");

while($sup = $cn->fetch()){
?>

      <tbody>
        <tr>
        <td><?= $sup['id_utilisateur']?></td>
        <td><?= $sup['Nom']?></td>
        <td><?= $sup['Prenom']?></td>
        <td><?= $sup['NomUtilisateur']?></td>
        <td><?= $sup['Email']?></td>
        <td><?= $sup['Age']?></td>
        <td>
<form method="post" action="supprimerutlisateur.php?d_ids=<?php echo $sup['id_utilisateur'] ;?>">

<button type="submit" name="suppprimer" class="far fa-trash-alt">Supprimmer</buton>
</form>
        </td>
          </tr>
          </tbody>
<?php } ?>
</table>
<a href=home.php class="btn btn-secondary">Retour</a>






  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
</body>
</html>
