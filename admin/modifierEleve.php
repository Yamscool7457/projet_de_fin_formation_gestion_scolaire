<?php
   require_once("connexion.php");
    /*
    $conn= mysqli_connect("localhost","root","") or die(mysqli_connect_error());
    mysqli_select_db ("gestion_scolaire",$conn) or die (mysqli_connect_error());
    */
    $code=$_POST['code'];
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $age=$_POST['age'];
    $lieux=$_POST['lieux'];
    $tel=$_POST['tel'];
    $email=$_POST['email'];
    $sexe=$_POST['sexe'];
    $classe=$_POST['classe'];
    $nomphoto=$_FILES['photo'] ['name'];
    $file_tmp_name=$_FILES['photo']['tmp_name'];
    move_uploaded_file($file_tmp_name,"./new_photo/$nomphoto");
    // information tuteur
    $nomTuteur=$_POST['nomTuteur'];
    $professionTuteur=$_POST['professionTuteur'];
    $telTuteur=$_POST['telTuteur'];
    $adresseTuteur=$_POST['adresseTuteur'];

$req="update inscription_eleves set nom='$nom' ,prenom='$prenom',age='$age', lieu='$lieux', tel='$tel' ,email='$email',sexe='$sexe' ,classe='$classe',photo='$nomphoto', 
nomTuteur='$nomTuteur', professionTuteur='$professionTuteur', telTuteur='$telTuteur', adresseTuteur='$adresseTuteur' where code=$code ";
mysqli_query($conn, $req) or die(mysqli_connect_error());
header("location:listeEleve.php");
?>