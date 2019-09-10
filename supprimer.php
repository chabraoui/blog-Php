<?php
session_start();
$d_id = $_GET['d_id'];

   try{
       $cnx = new PDO("mysql:host=localhost; dbname=vlog; charset=utf8", "root", "");
   }
   catch(Exception $e)
   {
       die("Erreur: ".$e->getMessage());
   }
   if(isset($_POST["suprimer"])) {
         $req = $cnx->query("delete  from commentaires where id=$d_id ");

          header("Location:beach.php");
exit();
}
?>
