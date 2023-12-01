<?php
require_once("connexion.php");
$code=$_GET['code'];
$req="delete from inscription_eleves where(CODE=$code)";
mysqli_query($conn, $req) or die (mysqli_connect_error());
// header("location:listeEleve.php");
require_once("listeEleve.php");
?>

