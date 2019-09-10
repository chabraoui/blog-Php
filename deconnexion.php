<?php
session_start();
session_destroy();
unset($_SESSION["email"]);
unset($_SESSION["password"]);
unset($_SESSION["id_user"]);
unset($_SESSION["nom"]);
unset($_SESSION["prenom"]);
unset($_SESSION["membre"]);

header('Location:home.php');
exit;
?>
