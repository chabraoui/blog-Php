<?php
   try{
       $cnx = new PDO("mysql:host=localhost; dbname=vlog; charset=utf8", "root", "");
   }
   catch(Exception $e)
   {
       die("Erreur: ".$e->getMessage());
   }
              $req = $cnx->query("select id_cat, Nom_cat from categories");
?>
