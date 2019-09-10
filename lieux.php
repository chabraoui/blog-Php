
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
<?php
require "config.php";

 ?>
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
            <li class="nav-item  mr-xm-2"><a class="nav-link" href="home.php" id="a">HOME</a></li>
	<li class="nav-item mr-xl-2"><a class="nav-link" href="beach.php" id="b"   >BEACH</a></li>
									<li class="nav-item mr-xl-1"><a class="nav-link" href="hotel.php" id="c" >HOTELS</a></li>
									<li class="nav-item submenu dropdown">
										<a class="nav-link  mr-xm-1" id="d" href="lieux.php" style="color:#FF007F">LIEUX</a>
									</li>
                  <li>
                  	<?php
                  	if(isset($_SESSION['membre']) && $_SESSION['membre']!==false ){?>
                  <li class="nav-item mr-xl-2"><a class="nav-link" href="addarticle.php" id="k"><?php echo "ADD_ARTICLE" ?></a></li>
                  <?php }?>

                  </li>


							<li class="nav-item submenu dropdown">

								<?php
								if(!isset($_SESSION['membre']) || $_SESSION['membre']==false){
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
	<!--================ End Header Menu Area =================-->

	<!--================Home Banner Area =================-->
	<section class="banner_areaq ">
			<div class="banner_inner overlay d-flex align-items-center">
				<div class="container">

				</div>
			</div>
	</section>




    <section class="feature-area section_gap_top">
  		<div class="container">
  			<div class="row align-items-end justify-content-left">
  				<div class="col-lg-12">
  					<div class="main_title">
  						<p>THE PARADIS OF More</p>
  						<h1 style="color:#006600">Famous Places To Visit In MOROCCO</h1>
  						<span class="title-widget-bg"></span>
  					</div>
  				</div>
  			</div>
  			<div class="row">
  				<!-- single-feature -->
          <?php
          try {
        $cnx = new PDO("mysql:host=localhost; dbname=vlog; charset=utf8", "root", "");
        $sql = "SELECT * FROM articles where id_cat=10";
        $q = $cnx->query($sql);
        $q->setFetchMode(PDO::FETCH_ASSOC);
        }
        catch(Exception $e)
        {
        die("Erreur: ".$e->getMessage());
        }
           ?>
					 <?php while ($row = $q->fetch()): ?>

  				<div class="col-lg-4 col-md-6">
  					<div class="single-feature">
  						<div class="feature-details">
  							<h5><?php echo htmlspecialchars($row['Titre']) ?></h5>
  								<p><?php echo substr($row['Contenu'], 0, 140); ?>		</p>
                                    <div class="aes">
                                      <a href="#loginModale1<?php echo  $row['id'];?>" class="primary-btn mb-40" data-toggle="modal" >Read More</a>
                                      <div class="table-responsive">

                                                        <div class="modal fade text-dark" id="loginModale1<?php echo  $row['id'];?>">
                                                          <div class="modal-dialog">
                                                            <div class="modal-content">

                                                              <div class="modal-title">
                                                                  <h3><?php echo htmlspecialchars($row['Titre']); ?></h3>
                                                                </div>
                                                                <div class="modal-body">
                                                                  <p><?php echo htmlspecialchars($row['Contenu']); ?></p>
                                                                </div>
                                                                  </div>
                                                                    </div>
                                                                      </div>
                                                                        </div>
                                    </div>
  						</div>
  						<div class="card" style="width: 18rem;">
  							<img class="card-img-top" src="<?php echo htmlspecialchars("images/".$row['image']); ?>" alt="erreur">
  						</div>
<form method="post" class="form" action ="addcomment2.php"  enctype="multipart/form-data">


							<div class="aaz">
								<?php
								if(isset($_SESSION['membre']) && $_SESSION['membre']!==false){

										?>

								<br>
								<br>
								<h5>Participer a l'article </h5>
								<input type="hidden" name="article_id" value="<?php echo $row['id'];?>">
								<textarea class="form-control" rows=10 cols=20 name="texte" placeholder="write your comment...." required></textarea>
								<input type="submit" name="envoyer" class="btn btn-sub btn-success" value="envoyer">

							<?php }?>

							</div>
</form>


							<div>
								<br>
							<input type="submit" name="enregistrer" value="affiche comment" class="btn btn-secondary" data-toggle="modal" data-target="#loginModale<?php echo  $row['id'];?>">
							<div class="table-responsive">

																<div class="modal fade text-dark" id="loginModale<?php echo  $row['id'];?>">
																  <div class="modal-dialog">
																    <div class="modal-content">

																      <div class="modal-body">
																        <!-- <form method="post" action=".">
																          <div class="form-group">
																            <label for="email">les commentaires</label>
																          </div>
																					<div class="form-group"> -->
																					<h3>Les commentaires</h3>

													<?php
															$art_id=$row['id'];
															$affich_com = $cnx->prepare("SELECT utilisateur.Nom, utilisateur.Prenom,  commentaires.id_article, commentaires.Text,commentaires.id, commentaires.date_Ajoute, utilisateur.id_utilisateur FROM commentaires
																INNER Join articles ON commentaires.id_article = articles.id
																 INNER JOIN utilisateur ON utilisateur.id_utilisateur = commentaires.id_utilisateur
																  WHERE commentaires.id_article=:id_art
																	ORDER BY commentaires.date_Ajoute desc");
																	 $affich_com->execute(array("id_art" => $art_id));
						                   while($don = $affich_com->fetch()){

									        ?>
																          <table class="table table-striped">

																						<tr>
																							<td>
																								<?= "De " . $don["Nom"] . " " . $don["Prenom"] ?>
																							</td>
																							<td>
																								<?=  $don["Text"] ?>
																							</td>
																							<td>
																								<?=  $don["date_Ajoute"] ?>
																							</td>
                                              <td>
  <?php
  if( isset( $_SESSION["membre"]) &&  $_SESSION['membre']!==false && (($don["Nom"] == $_SESSION["nom"] && $don["Prenom"] == $_SESSION["prenom"] && $_SESSION["id_user"]==$don['id_utilisateur']) || $_SESSION["Admin"]==1) ){
  ?>
  <form method="post" action="supprimer3.php?d_id=<?php echo $don['id'] ;?>">
                    <button  type="submit" name="suprimer3" class="far fa-trash-alt"></button>
                  <?php } else{ ?><button  type="submit" name="suprimer3" class="far fa-trash-alt" disabled> </button>
                  <?php }	?>
  </form>

                                                </td>
																						</tr>

																					</table>
																					<?php
																					}
																					?>
																          <!-- </div>
																        </form> -->
																      </div>
																    </div>
																  </div>
																</div>

							</div>
							</div>
              <div class="artc">
                <br>
                <?php
                if(isset($_SESSION['membre']) && $_SESSION['membre']!==false &&  $_SESSION["id_user"]==$row['id_utilisateur']){

                    ?>
          <a class="btn btn-primary" href="edit.php?id_Ar=<?php echo $row['id']; ?>">Edit Article</a>
          <?php } ?>
              </div>
              <div class="gdgd">
                <br>
                <?php
                if( isset( $_SESSION["membre"]) &&  $_SESSION['membre']!==false && (( $_SESSION["id_user"]==$row['id_utilisateur']) || $_SESSION["Admin"]==1) ){
                ?>
                <form method="post" action="suprimerarticle.php?d_idr=<?php echo $row['id'] ;?>">
                                  <button  type="submit" name="supression" class="far fa-trash-alt">SUPPRIMER L'ARTICLE</button>
                                <?php } else{ ?><button  type="submit" name="supression" class="far fa-trash-alt" disabled>SUPPRIMER L'ARTICLE </button>
                                <?php }	?>
                </form>

              </div>
  					</div>
  				</div>
					 <?php endwhile; ?>

  			</div>



  		</div>


  	</section>


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
