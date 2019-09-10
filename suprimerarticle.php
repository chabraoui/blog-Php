<?php
session_start();
$d_idr = $_GET['d_idr'];

   try{
       $cnx = new PDO("mysql:host=localhost; dbname=vlog; charset=utf8", "root", "");
   }
   catch(Exception $e)
   {
       die("Erreur: ".$e->getMessage());
   }
   if(isset($_POST["supression"])) {
         $req = $cnx->query("delete  from articles where id=$d_idr ");

          header("Location:beach.php");
exit();
}
?>
