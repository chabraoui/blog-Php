<?php
session_start();
try{
		$cnx = new PDO("mysql:host=localhost; dbname=vlog; charset=utf8", "root", "");
}
catch(Exception $e)
{
		die("Erreur: ".$e->getMessage());
}

if(isset($_POST["texte"]))
   {

$Text = $_POST["texte"];
   }

if(isset($_POST["envoyer"]))
{

$req = $cnx->prepare("insert into commentaires (id_article, Text, id_utilisateur )values(:id_article, :texte, :id_utilisateur) ");

$req->execute(array(
	"id_article" =>$_POST['article_id'],
	"texte" => $Text,
  "id_utilisateur" => $_SESSION["id_user"]
));
}
//header ('Location:beach.php');
header('Location:hotel.php');
?>
