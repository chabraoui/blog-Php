<?php
session_start();
$id_article=$_GET['id_Ar'];

   try{
       $cnx = new PDO("mysql:host=localhost; dbname=vlog; charset=utf8", "root", "");
   }
   catch(Exception $e)
   {
       die("Erreur: ".$e->getMessage());
   }
    $sql = "SELECT * FROM `articles` INNER JOIN `categories` ON `articles`.id_cat=`categories`.`id_cat` WHERE `id`='$id_article' ";
    $q = $cnx->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
    $row = $q->fetch();

      require("getcategorie.php");
      if(isset($_POST["titre"]))
         {
      $up_title=$_POST['titre'];
    }
    if(isset($_POST["categorie"]))
    {
      $up_categ=$_POST['categorie'];
    }
      if(isset($_POST["contenu"]))
      {
      $up_content=$_POST['contenu'];
    }

          if(isset($_POST['save'])) {
            $image_nom = $_FILES["image"]["name"];
            $image_tmp = $_FILES["image"]["tmp_name"];
            $imageExt = explode(".", $image_nom);
                $imageExtAct = strtolower(end($imageExt));
               $imageNomNouv = uniqid("", true).".".$imageExtAct;



               $sqlup=$cnx->prepare("update articles set Titre = :up_title, Contenu =:up_content, id_cat= :up_categ, image=:images  WHERE id =:ide");
               $sqlup->execute(array(
                   "up_title" => $up_title,
                   "up_content" => $up_content,
                   "up_categ" => intval($up_categ),
               "ide" => intval($id_article),
          "images"=> $imageNomNouv

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
<h1 align="center">Modification D'article </h1>
<div class="efg">
  <form  style="color: #757575" action="edit.php?id_Ar=<?php echo $id_article; ?>" method="post" enctype="multipart/form-data">

                 <!-- First name -->
                   <div class="md-form col-xl-4 article">
                       <label for="materialRegisterFormFirstName">Titre</label>
                       <input type="text" id="materialRegisterFormFirstName" class="form-control " value="<?php echo $row['Titre'] ?>" aria-describedby="materialRegisterFormPasswordHelpBlock" name="titre" required>
                   </div>
                       <!-- Last name -->
                   <div class="md-form col-xl-4 article">
                       <label for="materialRegisterFormLastName">Contenu</label>
                       <textarea class="form-control" rows=20 cols=50 name="contenu"  required><?php echo $row['Contenu'] ?></textarea>
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
                       while($row = $req->fetch())
                       {
                           echo "<option value = '".$row["id_cat"]."'>";
                             echo $row["Nom_cat"];
                           echo "</option>";
                       }
                   ?>
               </select>
            <button name="save" type="submit" value="upload" class="btn btn-warning">Save</button>
       </form>

      </div>
                      </body>
                      </html>
