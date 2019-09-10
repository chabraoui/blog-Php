<?php
session_start();
$d_idd = $_GET['d_ids'];

   try{
       $cnx = new PDO("mysql:host=localhost; dbname=vlog; charset=utf8", "root", "");
   }
   catch(Exception $e)
   {
       die("Erreur: ".$e->getMessage());
   }
   if(isset($_POST["suppprimer"])) {
         $req = $cnx->query("delete  from utilisateur where id_utilisateur=$d_idd ");

          header("Location:mypage.php");
exit();
}
?>
